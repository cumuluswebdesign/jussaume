<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mobilier Jussaume - Home</title>
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
                    <div class="slide left" id="slide1" data-anchor="slide1">
                        <div class="slider-content">
                            <h1 class="dark">Butcher Block Tabletop</h1>
                            <a href="table-tops.php" class="btn">Learn More</a>
                        </div>
                    </div>
                    <div class="slide" id="slide2" data-anchor="slide2">
                        <div class="slider-content">
                            <h1 class="dark">Outdoor Collections</h1>
                            <a href="collections.php" class="btn">Learn More</a>
                        </div>
                    </div>
                    <div class="slide" id="slide3" data-anchor="slide3">
                        <div class="slider-content">
                            <h1 class="dark">Butcher Block Countertop</h1>
                            <a href="countertop.php" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php include 'includes/modals.php'; ?>
        <?php include "../includes/new_footer.php"?>
	</body>
</html>
