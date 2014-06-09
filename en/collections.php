<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mobilier Jussaume | Collections</title>

		<?php include '../includes/head.php'; ?>
	</head>
	<body>
		<?php $page = "collections"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper">
			<div class="container" style="margin-top: 247px;">
				<div class="sections-nav">

					 <div class="section" id="hampton-nav">
					 	<div class="section-image-container">
							<img src="/img/circle-hampton.png">
						</div>

						<p>Hampton</p>
					</div>

					<div class="section" id="manhattan-nav">
						<div class="section-image-container">
							<img src="/img/circle-manhattan.png">
						</div>

						<p>Manhattan</p>
					</div>

					<div class="section" id="paris-nav">
						<div class="section-image-container">
							<img src="/img/circle-paris.png">
						</div>

						<p>Paris</p>
					</div>

					<div class="section section-last" id="vancouver-nav">
						<div class="section-image-container">
							<img src="/img/circle-vancouver.png">
						</div>

						<p>Vancouver</p>
					</div>

				</div>

				<div class="section-header collection-header" id="hampton-header"><h3>Hampton</h3></div>

				<div class="item"><a class="product-link-h001"><img src="/img/hampton/h001.jpg" alt="h001"></a></div>
				<div class="item"><a class="product-link-h002"><img src="/img/hampton/h002.jpg" alt="h002"></a></div>
				<div class="item"><a class="product-link-h005"><img src="/img/hampton/h005.jpg" alt="h005"></a></div>
				<div class="item"><a class="product-link-h006"><img src="/img/hampton/h006.jpg" alt="h006"></a></div>

				<div class="item"><a class="product-link-h007"><img src="/img/hampton/h007.jpg" alt="h007"></a></div>
				<div class="item"><a class="product-link-h008"><img src="/img/hampton/h008.jpg" alt="h008"></a></div>
				<div class="item"><a class="product-link-h009"><img src="/img/hampton/h009.jpg" alt="h009"></a></div>
				<div class="item"><a class="product-link-h010"><img src="/img/hampton/h010.jpg" alt="h010"></a></div>

				<div class="item"><a class="product-link-h040"><img src="/img/hampton/h040.jpg" alt="h040"></a></div>
				<div class="item"><a class="product-link-h060"><img src="/img/hampton/h060.jpg" alt="h060"></a></div>
				<div class="item"><a class="product-link-h080"><img src="/img/hampton/h080.jpg" alt="h080"></a></div>
				<div class="item"><a class="product-link-hsto1"><img src="/img/hampton/hsto1.jpg"></a></div>

				<div class="item last-row"><a class="product-link-hcab1"><img src="/img/hampton/hcab1.jpg"></a></div>

				<div class="section-header collection-header" id="manhattan-header"><h3>Manhattan</h3></div>

				<div class="item"><a class="product-link-m002"><img src="/img/manhattan/m002.jpg" alt="m002"></a></div>
				<div class="item"><a class="product-link-m003"><img src="/img/manhattan/m003.jpg" alt="m003"></a></div>
				<div class="item"><a class="product-link-m004"><img src="/img/manhattan/m004.jpg" alt="m004"></a></div>
				<div class="item"><a class="product-link-m005"><img src="/img/manhattan/m005.jpg" alt="m005"></a></div>

				<div class="item last-row"><a class="product-link-m020"><img src="/img/manhattan/m020.jpg" alt="m020"></a></div>
				<div class="item last-row"><a class="product-link-m030"><img src="/img/manhattan/m030.jpg" alt="m030"></a></div>

				<div class="section-header collection-header" id="paris-header"><h3>Paris</h3></div>

				<div class="item"><a class="product-link-p001"><img src="/img/paris/p001.jpg" alt="p001"></a></div>
				<div class="item"><a class="product-link-p002"><img src="/img/paris/p002.jpg" alt="p002"></a></div>
				<div class="item"><a class="product-link-p004"><img src="/img/paris/p004.jpg" alt="p004"></a></div>
				<div class="item"><a class="product-link-p010"><img src="/img/paris/p010.jpg" alt="p010"></a></div>

				<div class="item last-row"><a class="product-link-p020"><img src="/img/paris/p020.jpg" alt="p020"></a></div>

				<div class="section-header collection-header" id="vancouver-header"><h3>Vancouver</h3></div>

				<div class="item last-row"><a class="product-link-v001"><img src="/img/vancouver/v001.jpg" alt="v001"></a></div>
				<div class="item last-row"><a class="product-link-v002"><img src="/img/vancouver/v002.jpg" alt="v002"></a></div>
				<div class="item last-row"><a class="product-link-v020"><img src="/img/vancouver/v020.jpg" alt="v020"></a></div>
				<div class="item last-row"><a class="product-link-v030"><img src="/img/vancouver/v030.jpg" alt="v030"></a></div>
			</div>

			<?php include 'includes/footer.php'; ?>
		</div>

		<?php include 'includes/modals.php'; ?>

		<div id="modal-product" class="modal">
			<div class="modal-close">×</div>
			<div id="desc-div">
				<h3>La chaise.</h3>
				<p class="product-description">
					<strong>Item #</strong><br>
					<span id="product-id"></span><br><br>
					<strong>Dimensions</strong><br>
					<span id="product-dimensions"></span><br><br>
					<strong>Materials</strong><br>
					<span id="product-materials"></span><br><br>
					<strong>Warranty</strong><br>
					<span id="product-warranty"></span><br><br>
					<strong>Colors</strong><br>
					<span id="product-colors"></span>
				</p>
			</div>
			<div id="thumbs"></div>
		</div>

		<?php include 'includes/scripts.php'; ?>

		<script src="/js/vendor/unslider.min.js"></script>
		<script src="/js/vendor/preloadjs-0.3.1.min.js"></script>

		<script src="/js/sections-nav.js"></script>
		<script src="/js/product-modals.js"></script>
	</body>
</html>
