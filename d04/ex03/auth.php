<?php

function auth($login, $pasword) {
	$file = '../private/passwd';

	if (file_exists($file) && $login && $pasword)
	{
			$users = unserialize(file_get_contents($file));
			if ($users)
			{
				foreach ($users as $value) {
					if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $pasword))
						return TRUE;
				}
			}
	}
	return FALSE;
}

?>