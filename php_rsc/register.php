<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

function register($db, $login, $pass) {
	$result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['id'])) {
		mysqli_query($db, "INSERT INTO users VALUES (NULL, '$login', '$pass', '1')");
		return TRUE;
	}
	else {
		echo 'Login already exists';
		return FALSE;
	}
}
