$('[class^=product-link-]').each(function() {
	$(this).click(function() {	
		var photos = [];

		var product = $(this).attr('class').split('-')[2];
		var collection;

		switch (product.charAt(0)) {
			case 'h':
				collection = 'hampton';
				break;
			case 'm':
				collection = 'manhattan';
				break;
			case 'p':
				collection = 'paris';
				break;
			case 'v':
				collection = 'vancouver';
				break;
		}

		//Preload images
		var queue = new createjs.LoadQueue();
		queue.addEventListener("complete", handleComplete);
		queue.addEventListener("fileload", handleFileLoad);

		$.get('/ajax/getFiles.php?collection=' + collection + '&product=' + product, function(images) {
			var imagesToLoad = new Array();

			$.each(images, function(index, image) {
				imagesToLoad.push('/img/' + collection + '/' + product + '/' + image);
			});

			queue.loadManifest(imagesToLoad);
		});

		//Load product info
		$.get('/ajax/getProductInfo.php?lang=' + document.location.href.split('//')[1].split('/')[1] + '&product=' + product, function(productInfo) {
			$('#modal-product h3').text(productInfo.name);

			var dimensionHtml = "";
			productInfo.dimensions.forEach(function(dimension) {
				if (dimension.length > 1) {
					dimensionHtml += dimension[1] + ' (' + dimension[0] + ')<br>';
				}
				else {
					dimensionHtml += dimension[0] + '<br>';
				}
			});
			dimensionHtml = dimensionHtml.substr(0, dimensionHtml.length - 4); //Remove the last <br>
			$('#product-dimensions').html(dimensionHtml);

			$('#product-materials').text(productInfo.materials);
			$('#product-warranty').text(productInfo.warranty);
			$('#product-id').text(productInfo.id);

			//Colors
			productInfo.colors = $.map(productInfo.colors.split(';'), function(colorName) {return colorName.charAt(0).toUpperCase() + colorName.slice(1)});
			$.each(productInfo.colors, function(index, color) {
				$('#product-colors').append('<div class="color-option"><img src="/img/colors/' + color.toLowerCase() + '.png"><br><span>' + color + '</span></div>');
			});
		});

		function handleFileLoad(event) {
			photos.push(event.result);
		}

		function handleComplete() {
			//Refresh the modal
			$('#modal-product .slider').remove();
			$('<ul />').appendTo($('<div />').addClass('slider').insertAfter('#desc-div'));
			$('#thumbs').empty();
			$('#product-colors').empty();
		
			//Append the images
			photos.forEach(function(photo) {
				$('#modal-product ul').append($('<li />').append(photo));
				$('#thumbs').append($(photo).clone());
			});

			$('.slider').unslider({
				speed: 650,
				delay: 4000,
				keys: false
			});

			var sliderHandle = $('.slider').data('unslider');

			//Make thumnbails clickable
			$('#thumbs img').each(function(index) {
				$(this).click(function() {
					sliderHandle.move(index);
					sliderHandle.stop();
				});
			});

			openModal('product');
		}
	});
});