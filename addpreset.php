<?php
$nameErr = "";
$name = "";
$error = true;
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";
$layout = $_POST["layout"] ?? false;
if (isset($_POST["makingpresetsubmit"])) {
    $error = false;

    if (empty($_POST["presetname"])) {
        $nameErr = "Preset name is required";
        $error = true;
    } else {
        $name = test_input($_POST["presetname"]);
    }

    if (!$error) {
        try {
            $conn = new PDO("mysql:host=$host;dbname=$databaseName", $databaseusername, $databasepassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO afterpay.presets (presetname, layout)
            VALUES ('$name', '$layout')";
            // use exec() because no results are returned
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
}
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
