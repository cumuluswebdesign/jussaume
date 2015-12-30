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
                    <li data-menuanchor="intro"><a href="#intro" class="sliding">Intro</a></li>
                    <li data-menuanchor="other_info"><a href="#other_info" class="sliding">Other Info</a></li>
                </ul>
            </div>
        </div>
        
        <div id="fullpage" class="countertops">
            <div class="section" id="section0">
                <div class="section-in v-center dark">
                    <span class="over-title">Butcher Blocks</span>
                    <h1>Countertops</h1>
                    <p>Jussaume’s hardwood butcher block tops are better in every way. They offer the warmth of true hardwood without the high price tag. The table tops are specifically designed for restaurants and institutions. By choosing your wood specie, you dimensions— including thickness— and your finish, it will suit your design and concept remarkably well.</p>
                    <a href="#other_info" class="btn hidden-xs">Other Info</a>
                </div>
            </div>
            <div class="section" id="section1">
                <div class="section-in v-center dark">
                    <span class="over-title">Table Tops</span>
                    <h1>Other Info</h1>
                    <p>Jussaume’s hardwood butcher block tops are better in every way. They offer the warmth of true hardwood without the high price tag. The table tops are specifically designed for restaurants and institutions. By choosing your wood specie, you dimensions— including thickness— and your finish, it will suit your design and concept remarkably well.</p>
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