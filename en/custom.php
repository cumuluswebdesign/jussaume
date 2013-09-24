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
		<?php $page = "custom"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper">
			<div class="container">
				<h2 style="margin-bottom: 0;">Your design, our crafting.</h2>
				<p class="thin" style="font-size: 20px;">Jussaume’s commercial clients have the opportunity to get furniture that fit their specific needs through two customization options — <em>Mix & Match</em> and <em>From Scratch</em>.</p>
	
				<div class="custom-categories-container">
					<div class="custom-category" data-link="from-scratch">
						<img src="/img/from-scratch-icon.jpg" alt="From Sratch">
						From Scratch
					</div>
					<div class="custom-category" data-link="mix-match">
						<img src="/img/mix-match-icon.jpg" alt="Mix and Match">
						Mix and Match
					</div>
				</div>

				<div id="from-scratch">
					<h2>From Scratch</h2>

					<div class="process-step">
						<div class="icon-container"><img src="/img/custom/idea.svg" alt="description de l'étape" style="margin-top: 25px"></div>
						<p>
							<strong>Brainstorming</strong><br>
							When making your initial sketch imagine the environment you want to create including the integration and use of the furniture. Decide on your shape and choose from our selection of quality materials. Let your creativity flow!
						</p>
					</div>
					
					<div class="process-step">
						<div class="icon-container"><img src="/img/custom/laptop.svg" alt="description de l'étape" style="margin-top: 50px"></div>
						<p>
							<strong>Technical Drawing</strong><br>
							When your design is on paper we check the engineering, we cover each technical detail with respect to strength and manufacturing design feasibility. Next we provide you with accurate pricing along with the blueprints for the factory.
						</p>
					</div>

					<div class="process-step">
						<div class="icon-container"><img src="/img/custom/factory.svg" alt="description de l'étape" style="margin-top: 50px"></div>
						<p>
							<strong>Manufacturing</strong><br>
							Now the last step! A first sample is made. Strict quality control is done, including a thorough review of the engineering design to ensure a robust and durable product. Only after the design is approved a production line starts. A second quality control of the factory product is done before leaving the factory.
						</p>
					</div>

					<p style="text-align: center; width: 100%;"><em>Finally, your custom furniture is on the road!</em></p>
				</div>

				<div id="mix-match">
					<h2>Mix and Match</h2>
					<div class="icon-container"><img src="/img/custom/scissors.svg" alt="Mix and Match"></div>
					<p style="margin-bottom: 28px; ">Don’t want to start from scratch? It’s easy with Jussaume’s selection of existing designs to make your own design. Modify dimensions or swap materials. It's as simple as it sounds.</p>
				</div>
			</div>

			<?php include 'includes/footer.php'; ?>
		</div>

		<?php include 'includes/modals.php'; ?>
		<?php include 'includes/scripts.php'; ?>

		<script src="/js/custom.js"></script>

		<script src="/js/sections-nav.js"></script>
	</body>
</html>
