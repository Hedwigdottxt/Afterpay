<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//verjaardagen van die datum opvragen 

$sql = "SELECT 'id', 'name', 'date' FROM verjaardagen WHERE 'date'=CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "jarige: " . $row["name"]. "datum: " . $row["date"];
    }
} else {
    echo "Geen verjaardagen vandaag";
}

$conn->close();
?>