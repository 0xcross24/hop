<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="GET" action="index.php">
		<input placeholder="Beer" name="beer"/>
		<br>
		<br>
		<select name="beer_category" multiple>
			<option value="belgian_and_french">Belgian And French Origin Ales</option>
			<option value="british">British Origin Ales</option>
			<option value="european-germanic">European-Germanic Lager</option>
			<option value="german">German Origin Ales</option>
			<option value="hybrid-mix">Hybrid/Mixed Beer</option>
			<option value="international-ale">International Ale Styles</option>
			<option value="irish">Irish Origin Ales</option>
			<option value="mead-cider-perry">Mead, Cider, Perry</option>
			<option value="north-american">North American Origin Ales</option>
			<option value="north-america-lager">North American Lager</option>
		</select>
		<br>
		<br>
		<input type="submit" value="Submit"/>
	</form>
	
</body>
</html>