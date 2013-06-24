<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Home | Mobilier Jussaume</title>
		<meta name="description" content="">

		<?php include 'includes/head.php'; ?>
	</head>
	<body style="background: white;">
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div id="border"></div>

		<div class="wrapper" style="text-align: center; overflow: auto;">
			<img src="img/logo.svg" id="main-logo">
			<ul id="language-select">
				<li class="language"><a href="#">English</a></li>
				<li class="language" style="margin: 0"><a href="#">Francais</a></li>
			</ul>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

		<script>
			$('.wrapper img').css('margin-top', ($(window).height()/2 - 370/2) + 'px');

			$(window).resize(function() {
				$('.wrapper img').css('margin-top', ($(window).height()/2 - 370/2) + 'px');
			});
		</script>

		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>
