<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);

//verjaardagen van die datum opvragen 

$sql = "SELECT id, 'name', 'date' FROM verjaardagen WHERE 'date' = CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "date: " . $row["date"]. "orderaantal: " . $row["orderaantal"]. "<br>";
    }
} else {
    echo "0 results";
}

select date(verjaardag) from booking_dates where date(booked_at) = CURDATE();

$conn->close();
?>
