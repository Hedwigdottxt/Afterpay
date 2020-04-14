<?php
require ('loginsystem.php');
?>


<!doctype html>

<head>
    <link href="basis.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
.centerDiv {
    width: 60%;
    height: 200px;
    margin: 0 auto;
    margin-top: 12%;
    background-color: #FFA500;
}


.div1 {
    width: 50%;
    height: 200px;
    background-color: #A52A2A;
    float: left;
}

.div2 {
    width: 50%;
    height: 200px;
    background-color: #FFA500;
    float: left;
}

.button {
    background-color: #bbb;
    display: block;
    margin: 10px 0;
    padding: 10px;
    width: 100%;
}

</style>
</head>

<body>
    <div class="centerDiv">
        <div>
            <div class="div1">
            <button onclick="window.location.href = 'basic1.php';">
            </div>
            <div class="div2">
            <button onclick="window.location.href = 'basic2.php';">
            </div>
            <div>
            </div>
            <div class="div2">
            <button onclick="window.location.href = 'basic3.php';">
            </div>
            <div class="div1">
            <button onclick="window.location.href = 'create.php';">
            </div>
        </div>
    </div>

</body>

</html>