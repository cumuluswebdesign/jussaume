<header>
	<div class="wrapper">
		<nav>
			<ul>
				<li id="logo"><a href="index.php"><img src="/img/logo.png" height="28px"<?php if ($page == "home") {echo ' style="opacity: 1" class="current-page"';} ?>></a></li>
				<li><a href="collections.php"<?php if ($page == "collections") {echo ' style="color: white;"';} ?>>Collections</a></li>
				<li><a href="materials.php"<?php if ($page == "materials") {echo ' style="color: white;"';} ?>>Matériaux</a></li>
				<li><a href="custom.php"<?php if ($page == "custom") {echo ' style="color: white;"';} ?>>Sur Mesure</a></li>
				<li class="modal-link-about"><a>À Propos</a></li>
				<li class="modal-link-contact"><a>Nous Joindre</a></li>
			</ul>
		</nav>
	</div>
</header>