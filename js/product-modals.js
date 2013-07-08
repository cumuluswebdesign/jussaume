$('[class^=product-link-]').each(function() {
	$(this).click(function() {
		//Refresh the modal
		$('#modal-product .slider').remove();
		$('<ul />').appendTo($('<div />').addClass('slider').appendTo($('#modal-product')));

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

		var queue = new createjs.LoadQueue();
		queue.addEventListener("complete", handleComplete);
		queue.addEventListener("fileload", handleFileLoad);

		$.get('/ajax/getFiles.php?collection=' + collection + '&product=' + product, function(images) {
			var imagesToLoad = new Array();

			$.each(images, function(index, image) {
				imagesToLoad.push('/img/' + collection + '/' + image);
			});

			queue.loadManifest(imagesToLoad);
		});
	});
});

function handleFileLoad(event) {
	$('#modal-product ul').append($('<li />').append(event.result));
}

function handleComplete() {
	$('.slider').unslider({
		speed: 800,
		delay: 4000,
		keys: false,
		dots: true
	});

	openModal('product');
}