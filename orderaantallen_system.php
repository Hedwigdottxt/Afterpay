<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, 'date', 'orderaantal' FROM orderaantallen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "date: " . $row["date"]. "orderaantal: " . $row["orderaantal"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
