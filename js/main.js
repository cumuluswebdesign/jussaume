// Logo hover
$('#logo').hover(function() {
	$(this).find('img').css('opacity', '1');
},
function() {
	$(this).find('img').css('opacity', '0.5');
});

// Contact modal

$('li#contact a').click(function () {
	$('.popup-contact,.overlay').fadeIn(300);
});
	
$('.overlay').click(function () {
	$('.popup-contact,.overlay').fadeOut(300);
});

// About modal

$('li#about a').click(function () {
	$('.popup-about,.overlay').fadeIn(300);
});
	
$('.overlay').click(function () {
	$('.popup-about,.overlay').fadeOut(300);
});

// Documentation modal

$('li#documentation a').click(function () {
	$('.popup-documentation,.overlay').fadeIn(300);
});
	
$('.overlay').click(function () {
	$('.popup-documentation,.overlay').fadeOut(300);
});

// Unslider

$('.slider').unslider({
	speed: 1000,
	delay: 3000,
	keys: false,
	dots: true
});