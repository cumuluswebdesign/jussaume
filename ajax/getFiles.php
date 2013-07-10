<?php

	header('Content-type: application/json');

	if (isset($_GET['collection']) AND isset($_GET['product'])) {
		$files = scandir('../img/' . $_GET['collection'] . '/' . $_GET['product']);
		$files = array_diff($files, array('.', '..'));
		$images = array();

		foreach($files as $file) {
			if (substr($file, 0, 1) != ".") {
				array_push($images, $file);
			}
		}

		echo json_encode($images);
	}

?>