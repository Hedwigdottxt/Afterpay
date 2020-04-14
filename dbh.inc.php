<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>