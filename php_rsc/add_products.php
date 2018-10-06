<?php

function add_products($db) {
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Mens jacket', 'Sportwear', '1200', '20', '../resource/man_jacket.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Womens jacket', 'Sportwear', '1500', '15', '../resource/woman_jacket.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Mens trousers', 'Sportwear', '900', '31', '../resource/men_trousers.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Womens trousers', 'Sportwear', '700', '49', '../resource/women_trousers.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Mens shoes', 'Sportwear', '2900', '9', '../resource/men_shoes.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Womens shoes', 'Sportwear', '2500', '13', '../resource/women_shoes.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Backpack', 'Tourism', '800', '10', '../resource/backpack.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Tent', 'Tourism', '1350', '19', '../resource/tent.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Sleeping bag', 'Tourism', '950', '78', '../resource/sleeping_bag.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Flashlight', 'Tourism', '200', '35', '../resource/flashlight.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Rug', 'Tourism', '100', '90', '../resource/rug.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Tableware', 'Tourism', '1500', '17', '../resource/tableware.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Horizontal bar', 'Training', '3000', '3', '../resource/horizontal_bar.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Medball', 'Training', '400', '40', '../resource/medball.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Dumbbells', 'Training', '600', '21', '../resource/dumbbell.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Hoop', 'Training', '350', '36', '../resource/hoop.png')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Jump rope', 'Training', '50', '99', '../resource/jump-ropes.jpg')");
	mysqli_query($db, "INSERT INTO products VALUES (NULL, 'Ball', 'Training', '650', '63', '../resource/ball.png')");
}
?>
