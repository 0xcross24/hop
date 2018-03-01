<?php

$config = parse_ini_file('database.ini');

$host = $config['hostname'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

$dsn = 'mysql:host='. $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $username, $password);


 


require '../index.php';

?>