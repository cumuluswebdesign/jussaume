<footer>
    <footer-container>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="collections.php">Collections</a></li>
            <li><a href="materials.php">Matériaux</a></li>
            <li><a href="table-tops.php">Dessus de table</a></li>
            <li><a href="countertop.php">Comptoir</a></li>
            <li><a href="custom.php">Sur Mesure</a></li>
            <li id="modal-link-about"><a>À Propos</a></li>
            <li id="modal-link-contact"><a>Nous Joindre</a></li>
            
            <div class="footer-right">
                <li><a href="/en<?php echo substr($_SERVER['REQUEST_URI'], 3); ?>">English</a></li>
                <li><a href="/fr/docs/manuel-entretien.pdf" target="_blank">Maintenance Tips</a></li>
                <li><a href="/fr/docs/garantie.pdf" target="_blank">Warranty</a></li>
            </div>
        </ul>
	<small><span>&copy; <?php echo date('Y'); ?> Jussaume Entreprises Inc.</span></small>
    </footer-container>
</footer>
