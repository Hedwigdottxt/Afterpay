<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);

//verjaardagen van die datum opvragen 

$sql = "SELECT id, 'name', 'date' FROM verjaardagen WHERE 'date' = CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // opgevraagde data laten zien
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "name: " . $row["name"]. "verjaardag: " . $row["verjaardag"]. "<br>";
    }
} else {
    echo "Geen verjaardagen vandaag";
}


$conn->close();
?>