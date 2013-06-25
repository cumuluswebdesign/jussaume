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