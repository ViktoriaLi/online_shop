<?php
	require_once 'db_rush00/connection.php';

	$db = mysqli_connect($host, $user, $password);
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Men's jacket', 'Sportwear', '1200', '20')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Women's jacket', 'Sportwear', '1500', '15')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Men's trousers', 'Sportwear', '900', '31')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Women's trousers', 'Sportwear', '700', '49')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Men's shoes', 'Sportwear', '2900', '9')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Women's shoes', 'Sportwear', '2500', '13')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Backpack', 'Tourism', '800', '10')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Tent', 'Tourism', '1350', '19')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Sleeping bag', 'Tourism', '950', '78')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Flashlight', 'Tourism', '200', '35')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Rug', 'Tourism', '100', '90')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Tableware', 'Tourism', '1500', '17')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Horizontal bar', 'Training', '3000', '3')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Medball', 'Training', '400', '40')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Dumbbells', 'Training', '600', '21')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Hoop', 'Training', '350', '36')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Jump rope', 'Training', '50', '99')");
	mysqli_query($db, "INSERT INTO users VALUES (NULL, 'Ball', 'Training', '650', '63')");
?>
