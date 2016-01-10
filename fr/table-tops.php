<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dessus de table - Jussaume</title>
    <?php include "../includes/new_head.php"?>
    <script type="text/javascript">
        function fullPage() {
            $(document).ready(function () {
            var width = $(window).width();
            if(width > 700 ) {
                $('#fullpage').fullpage({
                    verticalCentered: false,
                    menu: "#menu",
                    anchors:['intro', 'diversity', 'wood_species', 'finishes', 'joints', 'reinforcements', 'footer']
                });
            }
            });
        }
        fullPage();
        $(window).resize(function () { fullPage(); });
    </script>
</head>

<body>
    <?php $page = "table-tops"; ?>
    <?php include "includes/header.php"?>
    <div id="page" class="wrapper">


           <div style="display: none" id="hideAll">&nbsp;</div>
        <script>
            document.getElementById("hideAll").style.display = "block";
            window.onload = function()
            { $('#hideAll').fadeOut(200) }
        </script>

            <div class="top-menu">
            <div class="top-menu-container">
                <h1>Dessus de table</h1>
                <ul id="menu">
                  <li data-menuanchor="intro"><a href="#intro" class="sliding">Introduction</a></li>
                  <li data-menuanchor="diversity"><a href="#diversity" class="sliding">Diversité</a></li>
                  <li data-menuanchor="wood_species"><a href="#wood_species" class="sliding">Types de bois</a></li>
                  <li data-menuanchor="finishes"><a href="#finishes" class="sliding">Finitions</a></li>
                  <li data-menuanchor="joints"><a href="#joints" class="sliding">Assemblages</a></li>
                  <li data-menuanchor="reinforcements"><a href="#reinforcements" class="sliding">Renforcements</a></li>
                </ul>
            </div>
        </div>

        <div id="fullpage" class="table_tops">
            <div class="section" id="section0">
                <div class="section-in v-center">
                    <span class="over-title">Étals de Boucher</span>
                    <h1>Dessus de table</h1>
                    <p>Les dessus de table de type étal de boucher Jussaume sont meilleurs dans tous les sens du terme. Conçus spécifiquement pour les restaurants et les institutions, ils offrent l'aspect chaleureux du bois franc à un prix abordable. Créez un concept personnalisé en choisissant le type de bois, les dimensions et la finition.</p>
                    <a href="#diversity" class="btn hidden-xs">Diversité</a>
                </div>


            </div>
            <div class="section" id="section1">
                <div class="section-in v-center">
                    <span class="over-title">Dessus de table</span>
                    <h1>Diversité</h1>
                    <p>Notre approche est on ne peut plus personnelle! C'est vous qui décidez de la forme et de la taille. Que vous souhaitiez un dessus de table épais, rectangulaire, mince ou circulaire, nous pouvons vous le fabriquer! Nous vous offrons la flexibilité dont vous avez besoin pour créer le concept parfait!</p>
                    <a href="#wood_species" class="btn hidden-xs">Types de bois</a>
                </div>
            </div>
            <div class="section" id="section2">
                <div class="section-in v-center">
                    <span class="over-title">Dessus de table</span>
                    <h1>Types de bois</h1>
                    <p>Nous fabriquons habituellement nos dessus en hêtre européen. C’est un bois franc à grain serré très durable qui donne une allure moderne. Disponibles avec assemblages à queue droite et bandes de bois sans fin. Provenance : Scandinavie.</p>
                    <p>Le frêne a une texture grossière qui fait ressortir la beauté naturelle du bois. Bien que l’aspect naturel du frêne soit sans pareil, il se teint bien. Un choix classique qui s’agence parfaitement à un décor contemporain. Fabriqué uniquement avec bande de bois sans fin. Provenance :</p>
                    <a href="#finishes" class="btn hidden-xs">Finition</a>
                </div>
            </div>
            <div class="section" id="section3">
                <div class="section-last"></div>
                <div class="section-current"></div>
                <div class="section-in v-center">
                    <span class="over-title">Dessus de table</span>
                    <h1>Finition</h1>
                    <p class="quote">Colorée ou naturelle. Couche de finition de haute qualité.</p>
                    <p>Nos dessus de table sont faits pour durer. Choisissez entre deux couleurs standards : chocolat noir et naturel. Ou, choisissez une couleur personnalisée adaptée à votre design. Nos trois couches de finition sur les deux côtés protègent le bois contre les liquides, les produits chimiques et l'usure.</p>
                    <div class="swatch-group">
                        <a href="#" id="finish-1" class="swatch wood-1"></a>
                        <a href="#" id="finish-2" class="swatch wood-2"></a>
                        <a href="#" id="finish-3" class="swatch wood-3"></a>
                    </div>
                    <a href="#joints" class="btn hidden-xs">Joints</a>
                    <div class="fade_box">
                        <img class="finish_1" src="../img/table-tops/finish_1_xs.png" alt="Finish 1">
                        <img class="finish_2" src="../img/table-tops/finish_2_xs.png" alt="Finish 2">
                        <img class="finish_3" src="../img/table-tops/finish_3_xs.png" alt="Finish 3">
                    </div>
                </div>

                <script>
                    function getBackgroundImgUrl() {
                        var bg = $('#section3 .section-current').css('background-image');
                        return bg;
                    }

                    var width = $(window).width();
                    if(width > 700) {
                        $("#finish-1").click(function() {
                            $('#section3 .section-last').css("background-image", getBackgroundImgUrl());
                            $('#section3 .section-current').hide().css("background-image", "url(/img/table-tops/finish_1.jpg)").fadeIn(300);
                        });
                        $("#finish-2").click(function() {
                            $('#section3 .section-last').css("background-image", getBackgroundImgUrl());
                            $('#section3 .section-current').hide().css("background-image", "url(/img/table-tops/finish_2.jpg)").fadeIn(300);
                        });
                        $("#finish-3").click(function() {
                            $('#section3 .section-last').css("background-image", getBackgroundImgUrl());
                            $('#section3 .section-current').hide().css("background-image", "url(/img/table-tops/finish_3.jpg)").fadeIn(300);
                        });
                    } else {
                        $("#finish-1").click(function(event) {
                            event.preventDefault();
                            $('#section3 img.finish_1').fadeIn();
                            $('#section3 img.finish_2').fadeOut();
                            $('#section3 img.finish_3').fadeOut();
                        });
                        $("#finish-2").click(function(event) {
                            event.preventDefault();
                            $('#section3 img.finish_1').fadeOut();
                            $('#section3 img.finish_2').fadeIn();
                            $('#section3 img.finish_3').fadeOut();
                        });
                        $("#finish-3").click(function(event) {
                            event.preventDefault();
                            $('#section3 img.finish_1').fadeOut();
                            $('#section3 img.finish_2').fadeOut();
                            $('#section3 img.finish_3').fadeIn();
                        });
                    }
                </script>
            </div>
            <div class="section" id="section4">
                <div class="section-in v-center">
                    <span class="over-title">Dessus de table</span>
                    <h1>Assemblages</h1>
                    <p class="quote">L’allure et la structure vont de paire. Et nous prenons cela très au sérieux.</p>
                    <p>Les assemblages à queue droite, réputés pour leur robustesse et leur aspect esthétique, confèrent une allure haut de gamme aux dessus de table en bois de hêtre.</p>
                    <p>L’option de fabrication avec bandes de bois sans fin est disponible pour la plupart des types de bois et permet de faire ressortir le motif du grain, leur conférant une allure très chic et élégante tout en procurant une surface d'aspect plus uni.</p>
                    <a href="#reinforcements" class="btn hidden-xs">Renforcements</a>
                </div>
            </div>
            <div class="section" id="section5">
                <div class="section-in dark v-center">
                    <span class="over-title">Dessus de table</span>
                    <h1>Renforcements</h1>
                    <p class="quote">Il y a droit. Et il y a encore plus droit.</p>
                    <p>Les dessus de table en bois franc ne devraient pas se déformer. Et en aucun cas, ils ne le feront. Chaque dessus est renforcé par des barres en acier inoxydable. Certains diront que cela est excessif; pour nous, c’est la norme.</p>
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
