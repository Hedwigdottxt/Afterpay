<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";


$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//verjaardagen van die datum opvragen 
$sql = "SELECT * FROM verjaardagen WHERE DATE_FORMAT(date, '%m-%d')=DATE_FORMAT(CURRENT_DATE(), '%m-%d')";
//$result = $conn->query($sql);

if ($result = mysqli_query($conn, $sql)) {
    while ($obj = mysqli_fetch_object($result)) {?>
        <p><b>Jarig: </b> <?php
            echo $obj->name;
          echo "<hr>";
      }
  }

$conn->close();
?>

