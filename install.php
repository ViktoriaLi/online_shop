<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

require_once 'db_rush00/connection.php';

$db = mysqli_connect($host, $user, $password);
if ($db) {
	if (mysqli_query($db,"CREATE DATABASE IF NOT EXISTS $database"))
		echo "OK1\n";
	if (mysqli_query($db,"USE $database"))
		echo "OK2\n";
	$sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
status INT(1) NOT NULL
)";
	if (mysqli_query($db, $sql))
		echo "OK3\n";
	$sql = "CREATE TABLE IF NOT EXISTS products (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
prod_name VARCHAR(30) NOT NULL,
category VARCHAR(30) NOT NULL,
price INT (6) NOT NULL,
quantity INT(6) NOT NULL)
";
	if (mysqli_query($db, $sql))
		echo "OK4\n";
}
else
	echo 'ERROR conect MYSQL';



mysqli_query($db, "INSERT INTO users VALUES (NULL, 'asd', 'pas', '1')");
mysqli_query($db, "INSERT INTO products VALUES (NULL, 'asd', 'pas', '700', '12')");

?>