<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);


if (isset($_POST["login_submit"])) {
    $user = $_POST["login_username"] ?? false;
    $pass = $_POST["login_password"] ?? false;

    $_SESSION["username"] = $user;
    $_SESSION["password"] = $pass;
    if (empty($user)) //if username field is empty echo below statement
    {
        echo '<script>alert("Enter a username!")</script>';

    } else if (empty ($pass)) //if password field is empty echo below statement
    {
        echo '<script>alert("Enter a password!")</script>';
    } else {
        $query = "SELECT * FROM afterpay.users WHERE username = '" . $user . "' AND password = '" . $pass . "'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            header('Location: /profiel.php?login=succes');
        } else {
            echo '<script>alert("Login values not valid!")</script>';
        }

    }
}