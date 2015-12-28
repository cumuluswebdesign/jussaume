<footer>
    <footer-container>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="collections.php">Collections</a></li>
            <li><a href="materials.php">Materials</a></li>
            <li><a href="table-tops.php">Tabletop</a></li>
            <li><a href="countertop.php">Countertop</a></li>
            <li><a href="custom.php">Custom</a></li>
            <li id="modal-link-about"><a>About</a></li>
            <li id="modal-link-contact"><a>Contact</a></li>
            
            <div class="footer-right">
                <li><a href="/fr<?php echo substr($_SERVER['REQUEST_URI'], 3); ?>">Français</a></li>
                <li><a href="/en/docs/maintenance-tips.pdf" target="_blank">Maintenance Tips</a></li>
                <li><a href="/en/docs/warranty.pdf" target="_blank">Warranty</a></li>
            </div>
        </ul>
	<small><span>&copy; <?php echo date('Y'); ?> Jussaume Entreprises Inc.</span></small>
    </footer-container>
</footer>
