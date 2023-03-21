<?php


$servername = "localhost";
$database = "ads_bank";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    die("mysqli_close: " . mysqli_connect_error());
}
//echo "conectado";


?>