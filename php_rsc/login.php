<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

function login($db, $login, $password)
{
	$result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['id'])) {
		echo "User does not exist";
		return FALSE;
	}
	if ($myrow['password']==$password) {
		$_SESSION['login'] = $myrow['login'];
		return TRUE;
	}
}

?>