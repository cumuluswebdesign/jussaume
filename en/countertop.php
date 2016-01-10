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
            var height = $(window).height();
            if(width > 700 && width / height > 1) {
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
                    <li data-menuanchor="intro"><a href="#intro" class="sliding">Intro</a></li>
                    <li data-menuanchor="other_info"><a href="#other_info" class="sliding">Convenience</a></li>
                </ul>
            </div>
        </div>

        <div id="fullpage" class="countertops">
            <div class="section" id="section0">
                <div class="section-in v-center dark">
                    <span class="over-title">Butcher Blocks</span>
                    <h1>Countertop</h1>
                    <p>Rock maple, Japanese food-safe glue and lot of passion: that's what goes into our countertops. And that's why they're amazing. Our unique manufacturing and distribution system allows us to offer affordable, yet high-quality countertops.</p>
                    <a href="#other_info" class="btn hidden-xs">Convenience</a>
                </div>
            </div>
            <div class="section" id="section1">
                <div class="section-in v-center dark">
                    <span class="over-title">Coutertop</span>
                    <h1>Convenience</h1>
                    <p class="quote">Practical. Beautiful. Simply better.</p>
                    <p>Not only will our countertops give any kitchen a bold look, they're also incredibly practical, allowing you to turn your entire counter into a large attractive cutting board. And since they're made of rock maple, the surface is naturally hygienic and perfectly well-suited for preparing food.</p>
                    <a id="modal-link-contact" class="btn hidden-xs">Contact</a>
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
