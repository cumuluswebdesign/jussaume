function emphasizeNav($navElement) {
	$navElement.find('p').css('color', '#111');
	$navElement.find('img').css({
		'width': '100px',
		'margin-top': '0'
	});
}

function deEmphasizeNav($navElement) {
	$navElement.find('p').css('color', '#a6a6a6');
	$navElement.find('img').css({
		'width': '90px',
		'margin-top': '5px'
	});
}

//Collection nav hover states
$('.collection-item').hover(function() {
	emphasizeNav($(this));
},
function() {
	deEmphasizeNav($(this));
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
			emphasizeNav($(this));
		}
		else {
			deEmphasizeNav($(this));
		}
	});
});