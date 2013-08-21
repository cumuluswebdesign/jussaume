$(document).ready(function() {
	$('.custom-category').click(function() {
		$("html, body").animate({scrollTop: $("#" + $(this).attr('data-link')).position().top - 40});
	});
});