$('[class^=product-link-]').each(function() {
	$(this).click(function() {
		//Refresh the modal
		$('#modal-product .slider').remove();
		$('<ul />').appendTo($('<div />').addClass('slider').insertAfter('#desc-div'));
		$('#thumbs').empty();

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
		$.get('/ajax/getProductInfo.php?lang=en&product=' + product, function(productInfo) {
			$('#modal-product h3').text(productInfo.name);

			var dimensionHtml = "";
			productInfo.dimensions.forEach(function(dimension) {
				dimensionHtml += dimension + '<br>';
			});
			dimensionHtml = dimensionHtml.substr(0, dimensionHtml.length - 4); //Remove the last <br>
			$('#product-dimensions').html(dimensionHtml);

			$('#product-materials').text(productInfo.materials);
			$('#product-warranty').text(productInfo.warranty);
			$('#product-id').text(productInfo.id);
		});

		function handleFileLoad(event) {
			$('#modal-product ul').append($('<li />').append(event.result));
			$('#thumbs').append($(event.result).clone());
		}

		function handleComplete() {
			$('.slider').unslider({
				speed: 800,
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