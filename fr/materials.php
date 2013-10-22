<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Mobilier Jussaume | Matériaux</title>
		<meta name="description" content="">
		
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
						<p>Fabriqué en France, ce produit permet des designs exceptionnels, une résistance sans précédent, une durabilité et un confort. Ces caractéristiques en font un matériau idéal pour restaurants, spas, hôtels, yachts et voiliers.</p>
						<ul>
							<li>Sèche rapidement</li>
							<li>Résiste aux UV, à la moisissure, au feu et au sel.</li>
							<li>Entretien facile</li>
							<li>Fraîcheur de l'assise</li>
							<li>Importé</li>
							<li><a class="modal-link-batylinecolors">Offert en plusieurs couleurs</a></li>
						</ul>
					</div>
					<div class="material-image"><img src="/img/material01.jpg"></div>
				</div>

				<div class="section-header material-alt" id="teak-header">
					<div class="material-image-alt"><img src="/img/material02.jpg"></img></div>
					<div class="material-info-alt">
						<h4>Teck</h4>
						<p>Cultivés en Indonésie, seuls les arbres matures sont soigneusement choisis. Ce bois tropical offre une grande durabilité et résiste à l’eau. Ce qui en fait le matériau naturel le plus approprié pour l’ameublement extérieur.</p>
						<ul>
							<li>Grain dense</li>
							<li>Non-traité</li>
							<li>Importé</li>
						</ul>
					</div>
				</div>

				<div class="section-header material" id="wicker-header">
					<div class="material-info">
						<h4>Rotin</h4>
						<p>Importé de Singapour, notre rotin synthétique est conçu pour le confort et une grande durabilité. Le rotin est le résultat du tissage de polyéthylène de première qualité. Ce produit est offert dans différentes couleurs et motifs.</p>
						<ul>
							<li>Exempt d'entretiens</li>
							<li>Robuste</li>
							<li>Stabilisé contre les rayons UV</li>
							<li>Importé</li>
						</ul>
					</div>
					<div class="material-image"><img src="/img/material03.jpg"></div>
				</div>

				<div class="section-header material-alt" id="inox-header">
					<div class="material-image-alt"><img src="/img/material04.jpg"></img></div>
					<div class="material-info-alt">
						<h4>Inox</h4>
						<p>L’acier inoxydable donne l’une des plus belles structures lisses et durables. Les produits Jussaume sont offerts dans la gamme d’inox de base 304, laquelle est reconnue pour sa durabilité. Toutefois, la gamme supérieure 316* est un amalgame de grade marin qui est offert pour les environnements les plus exigeants. Les deux gammes peuvent être électropolies en option.<sup>1</sup></p>
						<p style="font-size: 12px;"><sup>1</sup> Les prix de base excluent l’acier inoxydable 316 et l’électropolissage. Veuillez nous joindre pour plus d’informations.</p>
					</div>
				</div>

			</div>

			<?php include 'includes/footer.php'; ?>
		</div>

		<?php include 'includes/modals.php'; ?>

		<div id="modal-batylinecolors" class="modal" style="text-align: center;">
			<img src="/img/batyline-colors.jpg" alt="Batyline Colors">
		</div>

		<?php include 'includes/scripts.php'; ?>

		<script src="/js/sections-nav.js"></script>
	</body>
</html>
