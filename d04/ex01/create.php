<?php

if (!$_POST["login"] || !$_POST["passwd"] || $_POST["submit"] !== "OK") {
	echo "ERROR\n";
	return 0;
}
$dir = '../private';
$file = '../private/passwd';

if (!file_exists($dir))
	mkdir($dir);
if (file_exists($file)){
	$users = unserialize(file_get_contents($file));
	foreach ($users as $key => $value) {
		if ($value['login'] == $_POST["login"]) {
			echo "ERROR\n";
			return 0;
		}
	}
}
$user["login"] = ($_POST["login"]);
$user["passwd"] = hash('whirlpool', $_POST['passwd']);
$users[] = $user;
file_put_contents($file, serialize($users));
echo "OK\n"

?>