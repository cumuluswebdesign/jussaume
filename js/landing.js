//Vertical alignment of logo and links
$('#landing-wrapper img').css('margin-top', ($(window).height()/2 - 400/2) + 'px');

$(window).resize(function() {
	$('#landing-wrapper img').css('margin-top', ($(window).height()/2 - 400/2) + 'px');
});

//Animations on link click
$('#en-link, #fr-link').click(function() {
	$('#border').height(60);
	$('#main-logo, #language-select').fadeOut(500);

	$('#landing-wrapper')
	.css('border-left-width', '1px')
	.css('border-right-width', '1px')
	.animate({
		width: 962,
		borderLeftColor: '#e2e2e2',
		borderRightColor: '#e2e2e2'
	}, 500, 'swing', function() {
		location.href = 'en';
	});
});