<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabletop - Jussaume</title>
    <?php include "../includes/new_head.php"?>
    <script type="text/javascript">
        function fullPage() {
            $(document).ready(function () {
            var width = $(window).width();
            var height = $(window).height();
            if(width > 700 && width / height > 1) {
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
                <h1>Tabletop</h1>
                <ul id="menu">
                    <li data-menuanchor="intro"><a href="#intro" class="sliding">Intro</a></li>
                    <li data-menuanchor="diversity"><a href="#diversity" class="sliding">Diversity</a></li>
                    <li data-menuanchor="wood_species"><a href="#wood_species" class="sliding">Wood Species</a></li>
                    <li data-menuanchor="finishes"><a href="#finishes" class="sliding">Finishes</a></li>
                    <li data-menuanchor="joints"><a href="#joints" class="sliding">Joints</a></li>
                    <li data-menuanchor="reinforcements"><a href="#reinforcements" class="sliding">Reinforcements</a></li>
                </ul>
            </div>
        </div>

        <div id="fullpage" class="table_tops">
            <div class="section" id="section0">
                <div class="section-in v-center">
                    <span class="over-title">Butcher Blocks</span>
                    <h1>Tabletop</h1>
                    <p>Jussaume’s hardwood butcher block tops are better in every way. They offer the warmth of true hardwood without the high price tag. Our tabletops are specifically designed for restaurants and institutions. Choose your wood specie, dimensions and finish, suit your design and concept.</p>
                    <a href="#diversity" class="btn hidden-xs">Diversity</a>
                </div>


            </div>
            <div class="section" id="section1">
                <div class="section-in v-center">
                    <span class="over-title">Tabletop</span>
                    <h1>Diversity</h1>
                    <p>When we say custom, we mean it. You decide the shape and size. We make everything from thick and rectangular to thin and round tabletops. We offer you the flexibility you need to create the design that's just perfect for you.</p>
                    <a href="#wood_species" class="btn hidden-xs">Wood Species</a>
                </div>
            </div>
            <div class="section" id="section2">
                <div class="section-in v-center">
                    <span class="over-title">Tabletop</span>
                    <h1>Wood Species</h1>
                    <p>European beech is our standard wood for tabletops. As a tight grain hardwood, it makes a modern, yet very durable tabletop. European beech are offered with finger joints and full stave worktops. Sourced from: Scandinavia.</p>
                    <p>Ash has a coarse texture that emphasizes the natural beauty of wood. It looks great naturally, though it reacts amazingly well to stain. A classic top made for contemporary living. Only comes in full stave.</p>
                    <a href="#finishes" class="btn hidden-xs">Finishes</a>
                </div>
            </div>
            <div class="section" id="section3">
                <div class="section-last"></div>
                <div class="section-current"></div>
                <div class="section-in v-center">
                    <span class="over-title">Tabletop</span>
                    <h1>Finishes</h1>
                    <p class="quote">Natural or stained. High quality topcoat.</p>
                    <p>Our tabletops are made to last. Choose between two standard colours— dark chocolate and natural. Or choose a custom colour that integrates with your design. We apply three layer topcoat on both sides create a protective film against liquid, chemicals and wear.</p>
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
                    var height = $(window).height();
                    if(width > 700 && width / height > 1) {
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
                    <span class="over-title">Tabletop</span>
                    <h1>Joints</h1>
                    <p class="quote">Looks and structure go hand in hand. And we take both very seriously.</p>
                    <p>Finger joints well known for their strength and aesthetics make a great solution for a beautiful, high end beech wood tabletop.</p>
                    <p>Our full stave option, available in most woods, will enhance the features of the grain, offering a classy and stylish look as well as a great work and dining surface.</p>
                    <a href="#reinforcements" class="btn hidden-xs">Reinforcements</a>
                </div>
            </div>
            <div class="section" id="section5">
                <div class="section-in dark v-center">
                    <span class="over-title">Tabletop</span>
                    <h1>Reinforcements</h1>
                    <p class="quote">There's Straight. And there's straighter</p>
                    <p>Harwood tabletops should not warp or cup. And ours won’t. We reinforce every tabletop with built-in stainless steel bars. You might say that's extreme, for us that's just standard.</p>
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
