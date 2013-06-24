// Logo hover
if (!$('#logo').find('img').hasClass('current-page')) {
	$('#logo').hover(function() {
		$(this).find('img').css('opacity', '1');
	},
	function() {
		$(this).find('img').css('opacity', '0.5');
	});
}

// Modals
$('[class^=modal-link-]').each(function() {
	$(this).click(function() {
		$('#modal-' + $(this).attr('class').split('-')[2] + ', #overlay').fadeIn(300);
	});
});

$('#overlay').click(function() {
	$('.modal, #overlay').fadeOut(300);
});