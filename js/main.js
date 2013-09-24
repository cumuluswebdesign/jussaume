// Logo hover
// Note: We do this in JS and not with CSS animations to prevent layer creation, which messes with anti-aliasing on the icon
if (!$('#logo').find('img').hasClass('current-page')) {
	$('#logo').hover(function() {
		$(this).find('img').animate({opacity: 1}, 100);
	},
	function() {
		$(this).find('img').animate({opacity: 0.5}, 100);
	});
}


// Modals
$('[class^=modal-link-]').each(function() {
	$(this).click(function() {
		openModal($(this).attr('class').split('-')[2]);
	});
});

$('#overlay, .modal-close').click(function() {
	$('.modal, #overlay').fadeOut(300);
});

function openModal(modalID) {
  $("#modal-" + modalID).css('top', ($(window).height() -  $("#modal-" + modalID).outerHeight()) / 2 + 'px');
  $("#modal-" + modalID).css('left', ($(window).width() -  $("#modal-" + modalID).outerWidth()) / 2 + 'px');
  $("#modal-" + modalID + ', #overlay').fadeIn(300);
}


// Contact form
$("#contact input[type=button]").click(function() {
  var $name = $("#contact input[name=name]");
  var $email = $("#contact input[name=email]");
  var $company = $("#contact input[name=company]");
  var $message = $("#contact textarea[name=message]");

  var allValid = true;

  if (!$name.val() || /^\s+$/.test($name.val())) {
    allValid = false;
    $name.addClass("invalid");
  } else {
    $name.removeClass("invalid");
  }

  if (!/^[\w\.\-]+@[\w\.\-]+\.\w{2,3}$/i.test($email.val())) {
    allValid = false;
    $email.addClass("invalid");
  } else {
    $email.removeClass("invalid");
  }

  if ($.trim($message.val()) === "") {
  	allValid = false;
    $message.addClass("invalid");
  } else {
    $message.removeClass("invalid");
  }

  //Submit the form if everthing is valid
  if (allValid) {
  	$(this).val("...");

    //Send the request to send the email
    $.post('/sendEmail.php', {
      email: $email.val(),
      name: $name.val(),
      message: $message.val(),
      company: $company.val()
    }, function(res) {
    	$('#contact fieldset, #contact input[type=button]').fadeOut();
    	$('#notification').fadeIn();
    });
  }
});