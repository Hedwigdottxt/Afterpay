<?php
//index.php
$connect = mysqli_connect("localhost", "root", "student", "afterpay");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
    $chart_data .= "{ dag:'".$row["year"]."', maxload:".$row["max"].", currentload:".$row["current"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
     <style>
         .container {
             background-color: #A7F3AF;
             border-radius: 15px;
         }
     </style>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <div class="container" style="width:100%; height: 100%;">
   <br />
   <div id="chart"></div>
  </div>
 </body>
</html>
 
<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 resize: true,
    lineWidth: '4' ,
    gridTextColor: '#17202A' ,
 xkey:'dag',
 ykeys:[ 'maxload', 'currentload'],
 labels:[ 'maxload', 'Serverload%'],
 hideHover:'auto',
});
</script>