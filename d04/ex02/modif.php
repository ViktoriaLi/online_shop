<?php

if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["submit"] !== "OK") {
	echo "ERROR\n";
	return 0;
}
$dir = '../private';
$file = '../private/passwd';

if (file_exists($dir) && file_exists($file)){
	$users = unserialize(file_get_contents($file));
	if (!$users) {
		echo "ERROR\n";
		return 0;
	}
	foreach ($users as $key => $value) {
		if ($value['login'] === $_POST["login"] && $value['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
			$users[$key]["passwd"] = hash('whirlpool', $_POST['newpw']);
			file_put_contents($file, serialize($users));
			echo "OK\n";
			return 0;
		}
	}
}
echo "ERROR\n";

?>