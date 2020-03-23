<?php
require ('loginsystem.php');
?>
<!doctype html>
<head>
<link href="basis.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <form method="post" name="login_form">
        <div class="row">
            <div class="col-25">
                <label>Username:</label>
            </div>
            <div class="col-75">
                <input type="text" name="login_username" placeholder="Your username..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Password:</label>
            </div>
            <div class="col-75">
                <input type="text" name="login_password" placeholder="Your password..">
            </div>
        </div>
        <div class="col-25"></div>
        <div class="row">
            <div class="col-75_submit">
            <input type="submit" name="login_submit" value="Log in">
        </div>
        </div>
    </form>
</div>
</body>
</html>