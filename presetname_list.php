<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";
try {
    $conn = new PDO("mysql:host=$host;dbname=$databaseName", $databaseusername, $databasepassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT presetname FROM afterpay.presets");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $k=>$v) {
        foreach ($v as $value)
        print_r ("<a href=\"#\">" . $value . "</a>");
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
