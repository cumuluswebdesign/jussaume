var _gaq = _gaq || [];

var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js'; //Enable enhanced link attribution
_gaq.push(['_setAccount', 'UA-43568711-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();