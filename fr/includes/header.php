<div id="menu-icon-wrapper" class="menu-icon-wrapper">
    <!-- SVG element with paths -->
    <svg width="100px" height="100px">
        <path id="pathA" d="M 30 40 L 70 40 C 90 40 90 75 60 85 A 40 40 0 0 1 20 20 L 80 80" />
        <path id="pathB" d="M 30 50 L 70 50" />
        <path id="pathC" d="M 70 60 L 30 60 C 10 60 10 20 40 15 A 40 38 0 1 1 20 80 L 80 20" />
    </svg>
    <!-- Trigger to perform the animations -->
    <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
</div>
<header>
    <div class="primary-header">
        <div class="header-container">
            <div class="header-content">
                <div class="logo">
                    <a href="/fr/"><img src="/img/logo_white.png" width="40" alt="Mobilier Jussaume Logo"></a>
                </div>

                <div class="navigation">
                    <ul>
                        <li><a href="#" id="outdoor" class="<?php if ($page == "collections" || $page == "materials") {echo ' active';} ?>">Extérieur</a></li>
                            <ul id="outdoor-menu-xs" class="group">
                                <li><a href="collections.php">Collections</a></li>
                                <li><a href="materials.php">Matériaux</a></li>
                            </ul>
                        <li><a href="#" id="butcher-blocks" class="<?php if ($page == "table-tops" || $page == "countertops") {echo ' active';} ?>">Bloc Boucher</a></li>
                            <ul id="butcher-block-menu-xs" class="group">
                                <li><a href="table-tops.php">Desssus de table</a></li>
                                <li><a href="countertop.php">Comptoir</a></li>
                            </ul>
                        <li><a href="custom.php" class="<?php if ($page == "custom") {echo ' active';} ?>">Sur Mesure</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $('#butcher-blocks').click(function(){
            if($(window).width() > 992) {
                $('#outdoor-menu').fadeOut(50);
                $('#butcher-block-menu').delay(50).slideToggle(150);
            } else if($(window).width() < 701) {
                $('#outdoor-menu-xs').fadeOut(150).toggleClass('active');
                $('#butcher-block-menu-xs').fadeToggle(150).toggleClass('active');
            } else {
                $('#outdoor-menu').fadeOut(150).toggleClass('active');
                $('#butcher-block-menu').fadeToggle(150).toggleClass('active');
            }
        });
        $('#outdoor').click(function(){
            if($(window).width() > 992) {
                $('#butcher-block-menu').fadeOut(50);
                $('#outdoor-menu').delay(50).slideToggle(150);
            } else if($(window).width() < 701) {
                $('#butcher-block-menu-xs').fadeOut(150).toggleClass('active');
                $('#outdoor-menu-xs').fadeToggle(150).toggleClass('active');
            } else {
                $('#butcher-block-menu').fadeOut(150).toggleClass('active');
                $('#outdoor-menu').fadeToggle(150).toggleClass('active');
            }
        });
    </script>
    
    <div id="butcher-block-menu" class="secondary-header">
        <div class="header-container">
            <div class="header-content">
                <div class="navigation">
                    <ul>
                        <li><a href="table-tops.php" class="<?php if ($page == "table-tops") {echo ' active';} ?>">Dessus de table</a></li>
                        <li><a href="countertop.php" class="<?php if ($page == "countertops") {echo ' active';} ?>">Comptoir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="outdoor-menu" class="secondary-header">
        <div class="header-container">
            <div class="header-content">
                <div class="navigation">
                    <ul>
                        <li><a href="collections.php" class="<?php if ($page == "collections") {echo ' active';} ?>">Collections</a></li>
                        <li><a href="materials.php" class="<?php if ($page == "materials") {echo ' active';} ?>">Matériaux</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</header>