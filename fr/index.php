<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mobilier Jussaume - Accueil</title>
        <?php include "../includes/new_head.php" ?>
        <!-- FullPage.js -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    anchors: ['Home'],
                    slidesNavigation: true,
                    controlArrows: false,
                    afterRender: function () {
                        setInterval(function () {
                            $.fn.fullpage.moveSlideRight();
                        }, 4000);
                    }
                });
            });
        </script>
	</head>
	<body>
		<?php $page = "home"; ?>
		<?php include 'includes/header.php'; ?>

		<div class="wrapper home">
			<div id="fullpage">
                <div class="section" id="section0">
                    <div class="slide" id="slide1" data-anchor="slide1">
                        <div class="slider-content">
                            <h1 class="dark">Dessus de table</h1>
                            <a href="table-tops.php" class="btn">En savoir plus</a>
                        </div>
                    </div>
                    <div class="slide" id="slide2" data-anchor="slide2">
                        <div class="slider-content">
                            <h1 class="dark">Collection Extérieure</h1>
                            <a href="collections.php" class="btn">En savoir plus</a>
                        </div>
                    </div>
                    <div class="slide" id="slide3" data-anchor="slide3">
                        <div class="slider-content">
                            <h1 class="dark">Comptoir de Bois</h1>
                            <a href="countertop.php" class="btn">En savoir plus</a>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
		<?php include 'includes/modals.php'; ?>
        <?php include "../includes/new_footer.php"?>
	</body>
</html>