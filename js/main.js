 /* Contact PopUp */

$('li#contact a').click(function () {
   $('.popup-contact,.overlay').fadeIn(300);
});
  
$('.overlay').click(function () {
   $('.popup-contact,.overlay').fadeOut(300);
});

/* About PopUp */

$('li#about a').click(function () {
   $('.popup-about,.overlay').fadeIn(300);
});
  
$('.overlay').click(function () {
   $('.popup-about,.overlay').fadeOut(300);
});

/* Documentation PopUp */

$('li#documentation a').click(function () {
   $('.popup-documentation,.overlay').fadeIn(300);
});
  
$('.overlay').click(function () {
   $('.popup-documentation,.overlay').fadeOut(300);
});

/* Unslider */

$(function() {
    $('.slider').unslider({
    speed: 1000,               //  The speed to animate each slide (in milliseconds)
    delay: 4000,              //  The delay between slide animations (in milliseconds)
    complete: function() {},  //  A function that gets called after every slide animation
    keys: false,               //  Enable keyboard (left, right) arrow shortcuts
    dots: true,               //  Display dot navigation
    fluid: false,              //  Support responsive design. May break non-responsive designs
  });
});