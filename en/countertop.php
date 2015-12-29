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

    <div class="wrapper">
    
    <?php $page = "countertops"; ?>
    <?php include "includes/header.php"?>
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
                    <p>Rock Maple, Japanese food-safe glue and a lot of passion. That is what goes into our countertops. And that is why they are amazing. With our unique manufacturing and distribution, we offer an affordable, yet high-quality countertop.</p>
                    <a href="#other_info" class="btn hidden-xs">Convenience</a>
                </div>
            </div>
            <div class="section" id="section1">
                <div class="section-in v-center dark">
                    <span class="over-title">Coutertop</span>
                    <h1>Convenience</h1>
                    <p class="quote">Useful. Beautiful. Just better.</p>
                    <p>Not only does it offer a bold look in any kitchen, it’s also incredibly practical. Your whole counter turns into a big beautiful cutting board. Being made of Rock Maple, the surface is naturally hygienic. Perfect for food preparation.</p>
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