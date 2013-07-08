<?php

	header('Content-type: application/json');

	if (isset($_GET['collection']) AND isset($_GET['product'])) {
		$images = scandir('../img/' . $_GET['collection'] . '/' . $_GET['product']);
		$images = array_diff($images, array('.', '..'));

		echo json_encode($images);
	}

?>