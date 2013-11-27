<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mobilier Jussaume | Home</title>
		
		<?php include '../includes/head.php'; ?>

		<style>
			nav, .slider, .content-box, #headline {opacity: 0;}
			.container {height: 1540px;}
		</style>
	</head>
	<body>
		<?php $page = "home"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper">
			<div class="container">
				<div class="slider">
					<ul>
						<li><a href="collections.php#hampton-header"><img src="/img/slider01.jpg"></a></li>
						<li><a href="collections.php#manhattan-header"><img src="/img/slider02.jpg"></a></li>
						<li><a href="collections.php#vancouver-header"><img src="/img/slider04.jpg"></a></li>
					</ul>
				</div>

				<div id="headline">
					<h1>Montreal-based company that creates accessible outdoor luxury furniture.</h1>
				</div>

				<div class="content-box">
					<p>An array of materials carefully picked for one great quality.</p>
					<p style="margin-top: 15px;"><a href="materials.php">Learn more</a></p>
					<img src="/img/home/materials.jpg">
				</div>
				<div class="content-box">
					<p>
						It says it all, anything is possible.<br>
						Be creative.
					</p>
					<p style="margin-top: 15px;"><a href="custom.php#from-scratch">Learn more</a></p>
					<img src="/img/home/from-scratch.png">
				</div>
				<div class="content-box last-box">
					<p>Get your match by mixing our top of the line products.</p>
					<p style="margin-top: 15px;"><a href="custom.php#mix-match">Learn more</a></p>
					<img src="/img/home/mix-match.png">
					</p>
				</div>
			</div>

			<?php include 'includes/footer.php'; ?>
		</div>

		<?php include 'includes/modals.php'; ?>
		<?php include 'includes/scripts.php'; ?>

		<script src="/js/vendor/unslider.min.js"></script>

		<script>
			$('.container').height($(window).height() - 60);

			$('.slider').unslider({
				speed: 800,
				delay: 4000,
				keys: false,
				dots: true
			});

			$('nav, .slider, .content-box, #headline').css('opacity', '1');
			$('.container').animate({height: $('.content-box').outerHeight() + $('.slider').outerHeight() + $('#headline').outerHeight() - 40}, 500);
		</script>
	</body>
</html>
