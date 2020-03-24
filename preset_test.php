<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="preset.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="divmain">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" align="justify" style=""><?php require "nieuws_widget.php"; ?></div>
            <div class="col-3" align="justify" style="margin-left: 30px;"><?php require "reis_widget.php"; ?></div>
            <div class="col-3" align="justify" style="margin-left: -70px;"><?php require "twitter_widget.php"; ?></div>
            <div class="col-3" align="justify" style=""><?php require "calender.php"; ?></div>
        </div>
    </div>
</div>
</body>

