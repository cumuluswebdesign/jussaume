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
                    <a href="/en/"><img src="/img/logo_white.png" width="40" alt="Mobilier Jussaume Logo"></a>
                </div>

                <div class="navigation">
                    <ul>
                        <li><a href="#" id="outdoor" class="<?php if ($page == "collections" || $page == "materials") {echo ' active';} ?>">Outdoor</a></li>
                        <li><a href="#" id="butcher-blocks" class="<?php if ($page == "table-tops" || $page == "countertops") {echo ' active';} ?>">Butcher Blocks</a></li>
                        <li><a href="custom.php" class="<?php if ($page == "custom") {echo ' active';} ?>">Custom</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="butcher-block-menu" class="full-header">
  <div class="close"><span>×</span></div>
    <div class="side-header sliding-container" id="table-tops">
      <a href="table-tops.php">
       <div class="overlay"></div>
       <div class="full-center">
            <span class="sliding">Tabletop</span>
       </div>
     </a></div><div class="side-header sliding-container" id="countertop">
        <a href="countertop.php">
          <div class="overlay"></div>
          <div class="full-center">
              <span class="sliding">Countertop</span>
          </div>
        </a>
    </div>
</div>


<div id="outdoor-menu" class="full-header">
  <div class="close"><span>×</span></div>
    <div class="side-header sliding-container" id="collections">
      <a href="collections.php">
       <div class="overlay"></div>
       <div class="full-center">
            <span class="sliding">Collections</span>
       </div>
       </a></div><div class="side-header sliding-container" id="materials">
      <a href="materials.php">
        <div class="overlay"></div>
        <div class="full-center">
            <span class="sliding">Materials</span>
        </div>
        </a>
    </div>
</div>
