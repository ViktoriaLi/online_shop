<?php
session_start();
?>


<?php 
$servername = "localhost";
$username = "root";
$password = "20081991";
$dbname = "bd_rush00";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT prod_name from products WHERE category='Tourism' LIMIT 1";
$result = mysqli_query($conn, $sql);
$str = "";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $str .= "prod_name: " . $row["prod_name"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

<?php 
echo $str;
?>