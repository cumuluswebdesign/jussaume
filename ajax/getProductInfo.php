<?php

	header('Content-type: application/json');

	if (isset($_GET['product']) AND isset($_GET['lang'])) {
		$db = new PDO('mysql:host=127.0.0.1;dbname=jussaume;charset=utf8', 'root', '_!meow!_');

		$req = $db->prepare('SELECT * FROM products_' . $_GET['lang'] . ' WHERE id = :id');
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$req->execute(array(
			'id' => $_GET['product']
		));

		$product = $req->fetch();

		$product['dimensions'] = explode(';', $product['dimensions']);

		echo json_encode($product);
	}

?>