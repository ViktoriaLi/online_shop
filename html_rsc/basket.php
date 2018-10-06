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
$sql = "SELECT DISTINCT * from products WHERE category='$cat'";
$result = mysqli_query($conn, $sql);
$str = "";
$prod_names;
$prod_price;
$prod_quant;
$img_addr;
$img_cat;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $prod_names[] = $row["prod_name"];
        $prod_price[] = $row["price"];
        $prod_quant[] = $row["quantity"];
        $img_addr[] = $row["foto"];
        $img_cat[] = $row["category"];
    }
    mysqli_free_result($result);
}
mysqli_close($conn);

?>
