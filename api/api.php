<?php

$curl = curl_init();
$apikey = '35ac36973944221658d74aee2f32bb0c';
$beer = $_GET['name'];
$BASE_URL = "http://api.brewerydb.com/v2/";

curl_setopt_array($curl, array(
	CURLOPT_URL => "$BASE_URL/beers/?name=$beer&key=$apikey",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
));


$response = curl_exec($curl);


curl_close($curl);


$name = NULL;
$description = NULL;
$type = NULL;
$available = NULL;

$response_format = json_decode($response, true);

foreach ($response_format as $key => $value) {
	if ($key === 'data') {
		for ($i = 0; $i <= count($value); $i++) {
			foreach ($value[$i] as $data => $information) {
				if ($data === 'name') {
					$name = $information;
				}
				if ($data === 'description') {
					$description = $information;
				}
				if ($data === 'available') {
					foreach ($information as $availData => $availInformation) {
						if ($availData === 'name') {
							$available = $availInformation;
						}
					}
				}

				if ($data === 'style') {
					foreach ($information as $styleType => $styleInformation) {
						if ($styleType === 'name') {
							$type = $styleInformation;
						}
					}
				}
			}
		}
	}
}

require '../index.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2><?php echo $name; ?></h2>
  	<h3>Description</h3>
  	<p><?php echo $description; ?></p>
  	<h3>Type</h3>
  	<p><?php echo $type; ?></p>
  	<h3>Available</h3>
  	<p><?php echo $available; ?></p>

</body>
</html>