<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

function conect() {
	$host = 'localhost';
//	$host = '127.0.0.1';
	$database = 'bd_rush00';
	$user = 'root';
	$password = '20081991';
	return ($db = mysqli_connect($host, $user, $password, $database));
}
$host = 'localhost';
$database = 'bd_rush00';
$user = 'root';
$password = '20081991';

?>