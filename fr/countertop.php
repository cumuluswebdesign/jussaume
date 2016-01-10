<!DOCTYPE html>
<html lang="en">

<head>
    <title>Countertops - Jussaume</title>
    <?php include "../includes/new_head.php" ?>
    <!-- FullPage.js -->
    <script type="text/javascript">
        function fullPage() {
            $(document).ready(function () {
            var width = $(window).width();
            if(width > 700 ) {
                $('#fullpage').fullpage({
                    verticalCentered: false,
                    menu: "#menu",
                    anchors:['intro', 'other_info', 'footer']
                });
            }
            });
        }
        fullPage();
        $(window).resize(function () { fullPage(); });

    </script>

</head>

<body>
    <?php $page = "countertops"; ?>
    <?php include "includes/header.php"?>
    <div class="wrapper">

    <div style="display: none" id="hideAll">&nbsp;</div>
        <script>
            document.getElementById("hideAll").style.display = "block";
            window.onload = function()
            { $('#hideAll').fadeOut(200) }
        </script>

        <div class="top-menu">
            <div class="top-menu-container">
                <h1>Countertop</h1>
                <ul id="menu">
                    <li data-menuanchor="intro"><a href="#intro" class="sliding">Introduction</a></li>
                    <li data-menuanchor="other_info"><a href="#other_info" class="sliding">Praticabilité</a></li>
                </ul>
            </div>
        </div>

        <div id="fullpage" class="countertops">
            <div class="section" id="section0">
                <div class="section-in v-center dark">
                    <span class="over-title">Étals de bois</span>
                    <h1>Comptoir</h1>
                    <p>De l’érable dur, un peu de colle japonaise approuvée pour le contact alimentaire et plus qu’un brin de passion. C'est ce qui entre dans la fabrication de nos comptoirs. Et c'est pourquoi ils sont magnifiques. Notre système de fabrication et de distribution unique nous permet d'offrir des comptoirs abordables de haute qualité.</p>
                    <a href="#other_info" class="btn hidden-xs">Praticabilité</a>
                </div>
            </div>
            <div class="section" id="section1">
                <div class="section-in v-center dark">
                    <span class="over-title">Comptoir</span>
                    <h1>Praticabilité</h1>
                    <p>Pratiques. Beaux. Tout simplement meilleurs.</p>
                    <p>Non seulement donnent-ils un style audacieux à toute cuisine, ils sont également incroyablement pratiques. Voyez votre comptoir entier se transformer en une immense et belle planche à découper. La surface de travail faite de bois d’érable dur est naturellement hygiénique, donc parfaite pour la préparation des aliments.</p>
                    <a id="modal-link-contact" class="btn hidden-xs">Nous joindre</a>
                </div>
            </div>
            <div class="section fp-auto-height">
                <?php include 'includes/footer.php'; ?>
            </div>
        </div>
    </div>
    <?php include "../includes/new_footer.php"?>
</body>

</html>
