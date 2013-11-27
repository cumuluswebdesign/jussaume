<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mobilier Jussaume | Materials</title>
		
		<?php include '../includes/head.php'; ?>
	</head>
	<body>
		<?php $page = "materials"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper">
			<div class="container" style="margin-top: 247px;">
				<div class="sections-nav">

					<div class="section" id="batyline-nav">
					 	<div class="section-image-container">
							<img src="/img/material-batyline.png">
						</div>

						<p>Batyline</p>
					</div>

					<div class="section" id="teak-nav">
						<div class="section-image-container">
							<img src="/img/material-teak.png">
						</div>

						<p>Teak</p>
					</div>

					<div class="section" id="wicker-nav">
						<div class="section-image-container">
							<img src="/img/material-wicker.png">
						</div>

						<p>Wicker</p>
					</div>

					<div class="section section-last" id="inox-nav">
						<div class="section-image-container">
							<img src="/img/material-inox.png">
						</div>
						
						<p>Inox</p>
					</div>

				</div>

				<div class="section-header material" id="batyline-header">
					<div class="material-info">
						<h4>Batyline</h4>
						<p>Made in France, this textile provides exceptional design, unmatched resistance, durability and comfort. These characteristics make it a perfect material for commercial users such as restaurants, spas, hotels, cruisers and yachting.</p>
						<ul>
							<li>Quick drying</li>
							<li>UV, moisture, fire and salt resistant</li>
							<li>Easy maintenance</li>
							<li>Seat coolness</li>
							<li>Imported</li>
							<li><a class="modal-link-batylinecolors">Offered in multiple colors</a></li>
						</ul>
					</div>
					<div class="material-image"><img src="/img/material01.jpg"></div>
				</div>

				<div class="section-header material-alt" id="teak-header">
					<div class="material-image-alt"><img src="/img/material02.jpg"></img></div>
					<div class="material-info-alt">
						<h4>Teak</h4>
						<p>Grown in Indonesia, only mature trees are carefully harvested- tropical hardwood is used. This teak has great qualities including water resistance which make it one of the most appropriate timbers for outdoor furniture.</p>
						<ul>
							<li>High density wood</li>
							<li>Natural</li>
							<li>Imported</li>
						</ul>
					</div>
				</div>

				<div class="section-header material" id="wicker-header">
					<div class="material-info">
						<h4>Wicker</h4>
						<p>Mobilier Jussaume imports from Singapore synthetic wicker optimally designed for durability and comfort. This high quality product which is made of premium polyethylene comes in a choice of many colours and patterns.</p>
						<ul>
							<li>No maintenance</li>
							<li>Heavy duty</li>
							<li>Stabilized against UV rays</li>
							<li>Imported</li>
						</ul>
					</div>
					<div class="material-image"><img src="/img/material03.jpg"></div>
				</div>

				<div class="section-header material-alt" id="inox-header">
					<div class="material-image-alt"><img src="/img/material04.jpg"></img></div>
					<div class="material-info-alt">
						<h4>Inox</h4>
						<p>Stainless steel makes some of the most beautiful and durable shinny structures. Jussaume’s product are made with standard 304 grade stainless steel which is proven to withstand almost every environment. For extra durability 316* marine grade stainless is available for even the harshest ocean regions. Also, both stainless steel grades are offered with electropolishing.<sup>1</sup></p>
						<p style="font-size: 12px;"><sup>1</sup> Standard prices do not include 316 marine grade and electropolishing. Contact us!</p>
					</div>
				</div>

			</div>

			<?php include 'includes/footer.php'; ?>
		</div>

		<?php include 'includes/modals.php'; ?>

		<div id="modal-batylinecolors" class="modal" style="text-align: center;">
			<img src="/img/batyline-colors.jpg" alt="Batyline Colors">
			<p style="margin-top: 15px;">These colors are only available to commercial clients.</p>
		</div>

		<?php include 'includes/scripts.php'; ?>

		<script src="/js/sections-nav.js"></script>
	</body>
</html>
