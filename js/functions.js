/********************************
HELPERS
********************************/

// Center in div
function recalculateCenterInDiv(){
    $('.v-center').each(function(){
        var parentHeight = $(this).parent().height();
        var elementHeight = $(this).height();
        $(this).css("top", parentHeight/2 - elementHeight/2 );
    });
    $('.full-center').each(function(){
        var parentHeight = $(window).height(); // Always equal to the full screen
        var elementHeight = $(this).height();
        $(this).css("top", parentHeight/2 - elementHeight/2 );
    });
}

$( document ).ready(function() {
    recalculateCenterInDiv();
});

// Redo when resizing
$(window).resize(function () {
    recalculateCenterInDiv();
});

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
