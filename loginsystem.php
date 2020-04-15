<?php
if (isset($_COOKIE['Login'])) {
    unset($_COOKIE['Login']);
    setcookie('Login', '', time() - 3600, '/');
}
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);


if (isset($_POST["login_submit"])) {
    $user = filter_var($_POST["login_username"], FILTER_SANITIZE_STRING) ?? false;
    $pass = filter_var($_POST["login_password"], FILTER_SANITIZE_STRING) ?? false;

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
            $cookie_name = "Login";
            $cookie_value = "Loggedin";
            setcookie($cookie_name, $cookie_value, time() + (86400), "/");
            header('Location: /github afterpay/Afterpay/making_presets.php');
        } else {
            echo '<script>alert("Login values not valid!")</script>';
        }

    }
}

