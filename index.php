<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mobilier Jussaume | Home</title>
		<meta name="description" content="">
		
		<?php include 'includes/head.php'; ?>
	</head>
	<body>
		<?php $page = "home"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper">
			<div class="container">
				<div class="slider">
					<ul>
						<li><img src="img/slider01.jpg"></img></li>
						<li><img src="img/slider02.jpg"></img></li>
						<li><img src="img/slider03.jpg"></img></li>
					</ul>
					
				</div>

				<div class="content-box"><h3>Materials</h3><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur.</p><p style="margin-top: 10px;"><a href="#">Learn more</a></p></div>
				<div class="content-box"><h3>About</h3><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur.</p><p style="margin-top: 10px;"><a href="#">Learn more</a></p></div>
				<div class="content-box last-box"><h3>Custom</h3><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur.</p><p style="margin-top: 10px;"><a href="#">Learn more</a></p></div>
			</div>

			<?php include 'includes/footer.php'; ?>
		</div>

		<?php include 'includes/modals.php'; ?>
		<?php include 'includes/scripts.php'; ?>

		<script>
			$('.slider').unslider({
				speed: 800,
				delay: 4000,
				keys: false,
				dots: true
			});
		</script>
	</body>
</html>
