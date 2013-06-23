<header>
	<div class="wrapper">
		<nav>
			<ul>
				<li id="logo"><a href="index.php"><img src="img/logo.png" height="28px"<?php if ($page == "home") {echo ' style="opacity: 1" class="current-page"';} ?>></a></li>
				<li><a href="collections.php"<?php if ($page == "collections") {echo ' style="color: white;"';} ?>>Collections</a></li>
				<li><a href="materials.php"<?php if ($page == "materials") {echo ' style="color: white;"';} ?>>Materials</a></li>
				<li><a href="#">Custom</a></li>
				<li id="about"><a>About</a></li>
				<li id="contact"><a>Contact</a></li>
			</ul>
		</nav>
	</div>
</header>