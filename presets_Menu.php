<!doctype html>
<head>
    <link href="basis.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
    body{
        /* background-repeat: no-repeat; */
        
    }
    .box{
        display: none;
        width: 100%;
        /* display: block;
        position: relative;
        z-index: 100; */
    }
    .container{
        text-align: center;
    }
    a, .add{
        font-family: "Poppins";
        font-size: 64px;
        background-color: white;
        border-radius: 5px;
        color: black;
        padding: 0px 25px 0px 25px;

    }
    a:hover + .box {
        display: block;
        position: relative;
        z-index: 100;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-50">
                <a style="text-decoration:none" href="preset_test.php">Preset Test </a>
                <div class="box">
                    <iframe src="preset_test.php" width = "100%" height = "1000px" style="border-radius: 10px">
                    </iframe>
                </div> 
            </div>    
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-50">
                <button type="button" class="add" >+
                </button>
            </div>    
        </div>
    </div>
</body>