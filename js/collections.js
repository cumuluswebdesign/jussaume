function emphasizeNav($navElement, doResize) {
	$navElement.find('p').css('color', '#111');

	if (doResize) {
		$navElement.find('img').css({
			'width': '100px',
			'margin-top': '0'
		});
	}

	$navElement.css('opacity', '1');
}

function deEmphasizeNav($navElement, doResize) {
	$navElement.find('p').css('color', '#a6a6a6');

	if (doResize) {
		$navElement.find('img').css({
			'width': '90px',
			'margin-top': '5px'
		});
	}

	$navElement.css('opacity', '0.5');
}

//Collection nav hover states
$('.collection-item').hover(function() {
	emphasizeNav($(this), false);
},
function() {
	deEmphasizeNav($(this), false);
});

//Emphasize the currently viewed collection
$(window).scroll(function() {
	var currentlyViewedCollection = "";

	$(".collection-header").each(function() {
		if ($(this).position().top - 247 < $(window).scrollTop()) {
			currentlyViewedCollection = $(this).attr('id').split('-')[0];
		}
	});

	$(".collection-item").each(function() {
		if ($(this).attr('id').split('-')[0] === currentlyViewedCollection) {
			emphasizeNav($(this), true);
		}
		else {
			deEmphasizeNav($(this), true);
		}
	});
});