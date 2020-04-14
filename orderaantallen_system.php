<?php
$host = "localhost";
$databaseName = "afterpay";
$databaseusername = "root";
$databasepassword = "student";

$conn = mysqli_connect($host, $databaseusername, $databasepassword, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<html>
<style type="text/css">
body {
    font: 14px sans-serif;
    text-align: center;
    background-color: #A7F3AF;
}

.column {
    float: right;
    width: 50%;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

<body>


    <div class="container" style="margin-top: 2px;">
        <div class="row justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <table class="table table-stripped table-hover table-bordered">
                    <tbody style="background-color: #FFFFFF">
                        <tr>
                            <td> OrdersNL
                            </td>
                            <td> OrdersBE
                            </td>
                            <td> Datum
                            </td>
                        </tr>
                        <?php
                        $sqlb = $conn->query("SELECT `id`,  `orderaantal`, `orderaantalbe`, `uren` FROM `orderaantallen` ORDER BY `id` DESC LIMIT 4 ");
                        while ($data = $sqlb->fetch_array()) {
                            echo '  <div class="row">
                                        <div class="column"> 
							                <tr data-index="' . $data['uren'] . '" data-position="' . $data['id'] . '">
                                                <td>  ' . $data['orderaantal'] . '   </td>
                                                <td>  ' . $data['orderaantalbe'] . '   </td>
                                                <td>  ' . $data['uren'] . '  </td>
                                            </tr> 
                                        </div> 
                                    </div>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
