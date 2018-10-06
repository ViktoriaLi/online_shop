<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);


require_once 'db_rush00/connection.php';
require_once 'php_rsc/register.php';
require_once 'php_rsc/add_products.php';

$db = mysqli_connect($host, $user, $password);

$result = mysqli_query($db, "SHOW DATABASES LIKE '$database'");
$myrow = mysqli_fetch_array($result);
if (!$myrow) {
	if ($db) {
		mysqli_query($db,"CREATE DATABASE IF NOT EXISTS $database");
		mysqli_query($db,"USE $database");
		$sql = "CREATE TABLE IF NOT EXISTS users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			login VARCHAR(30) NOT NULL,
			password VARCHAR(30) NOT NULL,
			status INT(1) NOT NULL
			)";
		mysqli_query($db, $sql);
		$sql = "CREATE TABLE IF NOT EXISTS products (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			prod_name VARCHAR(30) NOT NULL,
			category VARCHAR(30) NOT NULL,
			price INT (6) NOT NULL,
			quantity INT(3) NOT NULL,
			foto VARCHAR(30) NOT NULL
			)";
		mysqli_query($db, $sql);
		add_products($db);
		require_once 'php_rsc/register.php';
	}
	else
		echo 'ERROR conect mySQL';
}
else
	echo 'end';



//$login = 'asdqd';
//$pass = '123';
//
//register($db, $login, $pass);
?>