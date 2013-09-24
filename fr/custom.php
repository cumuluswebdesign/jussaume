<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mobilier Jussaume | Sur Mesure</title>
		<meta name="description" content="">
		
		<?php include '../includes/head.php'; ?>
	</head>
	<body>
		<?php $page = "custom"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper">
			<div class="container">
				<h2 style="margin-bottom: 0;">Votre conception, notre réalisation.</h2>
				<p class="thin" style="font-size: 20px;">À titre de client commercial, nous vous offrons l’opportunité d’obtenir l’ameublement qui convient à vos besoins. Deux possibilités s’offrent à vous — <em>Mix & Match</em> et <em>Partir de 0</em>.</p>
	
				<div class="custom-categories-container">
					<div class="custom-category" data-link="from-scratch">
						<img src="/img/from-scratch-icon.jpg" alt="From Sratch">
						Partir de 0
					</div>
					<div class="custom-category" data-link="mix-match">
						<img src="/img/mix-match-icon.jpg" alt="Mix and Match">
						Mix and Match
					</div>
				</div>

				<div id="from-scratch">
					<h2>From Scratch</h2>

					<div class="process-step">
						<div class="icon-container"><img src="/img/custom/idea.svg" alt="description de l'étape" style="height: 155px;"></div>
						<p>
							<strong>Remue-méninges</strong><br>
							Lors de la conception de vos croquis, imaginez l’environnement que vous voulez créer et l’intégration de votre mobilier. Définissez les formes, matériaux et dimensions. Soyez créatifs !
						</p>
					</div>
					
					<div class="process-step">
						<div class="icon-container"><img src="/img/custom/laptop.svg" alt="description de l'étape" style="margin-top: 50px"></div>
						<p>
							<strong>Dessin Technique</strong><br>
							À partir de vos croquis, les dessins techniques sont élaborés. Nous travaillons minutieusement sur la structure pour obtenir une solidité accrue et vous assurer un meuble confortable. Le tout est alors soumis à la production.
						</p>
					</div>

					<div class="process-step">
						<div class="icon-container"><img src="/img/custom/factory.svg" alt="description de l'étape" style="margin-top: 50px"></div>
						<p>
							<strong>Production</strong><br>
							Dernière étape et non la moindre. Le premier échantillon est créé. Seul un produit de qualité est accepté. Après avoir passé un contrôle de qualité rigoureux, la mise en production débute. Avant d’être expédié, un dernier contrôle est effectué sur chacune des composantes de votre mobilier.
						</p>
					</div>

					<p style="text-align: center; width: 100%;"><em>Finalement, votre mobilier sur mesure est en route !</em></p>
				</div>

				<div id="mix-match">
					<h2>Mix and Match</h2>
					<div class="icon-container"><img src="/img/custom/scissors.svg" alt="Mix and Match"></div>
					<p style="margin-bottom: 28px; ">
						Mix and Match est une façon originale d’obtenir le mobilier désiré. Sélectionnez l’un de nos produits existants et modifiez-le selon vos besoins en retouchant les dimensions ou en changeant le revêtement.  C’est simple comme bonjour !<br><br>
						Communiquez avec nous et il nous fera plaisir de vous accompagner tout au long de votre projet.
					</p>
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
