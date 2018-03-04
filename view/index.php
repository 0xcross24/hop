<?php

$config = require '../database/database.php';

require '../api/api.php';
require '../database/Connection.php';
require '../database/Query.php';

$database = new QueryBuilder(

	Connection::connectToDb($config['database'])
);

if (empty($_GET['beer']) && empty($_GET['beer_category'])) {

	echo "Please fill in the blanks";

	require 'index.view.php';

} else {

	$beer = $database->findBeer($_GET['beer']);

	if (empty($beer)) {

		
		$api_beer = $database->insertBeer($name, $description, $type, $available);


	}

	$beer = $database->findBeer($_GET['beer']);

	foreach ($beer as $information) {
		$name = $information['name'];
		$description = $information['description'];
		$type = $information['type'];
		$available = $information['available'];


		require 'beer.view.php';
	}
}

?>




