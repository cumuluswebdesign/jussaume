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

/********************************
MOBILE MENU ANIMATION
********************************/

var pathA = document.getElementById('pathA'),
    pathC = document.getElementById('pathC'),
    segmentA = new Segment(pathA, 8, 32),
    segmentC = new Segment(pathC, 8, 32);

// Linear section, with a callback to the next
function inAC(s) { s.draw('80% - 24', '80%', 0.3, {delay: 0.1, callback: function(){ inAC2(s) }}); }

// Elastic section, using elastic-out easing function
function inAC2(s) { s.draw('100% - 54.5', '100% - 30.5', 0.6, {easing: ease.ease('elastic-out', 1, 0.3)}); }


var pathB = document.getElementById('pathB'),
    segmentB = new Segment(pathB, 8, 32);

// Expand the bar a bit
function inB(s) { s.draw(8 - 6, 32 + 6, 0.1, {callback: function(){ inB2(s) }}); }

// Reduce with a bounce effect
function inB2(s) { s.draw(8 + 12, 32 - 12, 0.3, {easing: ease.ease('bounce-out', 1, 0.3)}); }

function outAC(s) { s.draw('90% - 24', '90%', 0.1, {easing: ease.ease('elastic-in', 1, 0.3), callback: function(){ outAC2(s) }}); }
function outAC2(s) { s.draw('20% - 24', '20%', 0.3, {callback: function(){ outAC3(s) }}); }
function outAC3(s) { s.draw(8, 32, 0.7, {easing: ease.ease('elastic-out', 1, 0.3)}); }

function outB(s) { s.draw(8, 32, 0.7, {delay: 0.1, easing: ease.ease('elastic-out', 2, 0.4)}); }

var trigger = document.getElementById('menu-icon-trigger'),
    toCloseIcon = true;

function openMenu() { $('header').css("visibilty", 'visibile').fadeIn(); }
function closeMenu() { $('header').css("visibilty", 'hidden').fadeOut(); }

trigger.onclick = function() {
    if (toCloseIcon) {
        inAC(segmentA);
        inB(segmentB);
        inAC(segmentC);
        openMenu();
    } else {
        outAC(segmentA);
        outB(segmentB);
        outAC(segmentC);
        closeMenu();
    }
    toCloseIcon = !toCloseIcon;
};

// Modals
$('[id^=modal-link-]').each(function() {
	$(this).click(function() {
		openModal($(this).attr('id').split('-')[2]);
	});
});

$('#overlay, .modal-close').click(function() {
	$('.modal, #overlay').fadeOut(300);
});

function openModal(modalID) {
  $("#modal-" + modalID).css('top', ($(window).height() -  $("#modal-" + modalID).outerHeight()) / 2 + 'px');
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