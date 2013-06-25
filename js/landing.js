//Wrapper vertical size
$('#landing-wrapper').height($(window).height() - 10);

$(window).resize(function() {
	$('#landing-wrapper').height($(window).height() - 10);
});

//Vertical alignment of logo and links
$('#landing-wrapper img').css('margin-top', ($(window).height()/2 - 390/2) + 'px');

$(window).resize(function() {
	$('#landing-wrapper img').css('margin-top', ($(window).height()/2 - 390/2) + 'px');
});

//Animations on link click
$('#en-link, #fr-link').click(function() {
	var clickedLink = $(this);

	$('#border').animate({height: 60}, 1000);
	$('#main-logo, #language-select').fadeOut(1000);

	$('#landing-wrapper')
	.css('border-left-width', '1px')
	.css('border-right-width', '1px')
	.animate({
		width: 962,
		borderLeftColor: '#e2e2e2',
		borderRightColor: '#e2e2e2'
	}, 1000, 'swing', function() {
		location.href = clickedLink.attr('id').split('-')[0];
	});
});