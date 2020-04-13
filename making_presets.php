<?php
session_start();
require "digital_klokwidget.php";
require "addpreset.php";
include 'pagehandler.php';
$page = getPage();
?>
<!doctype html>
<head>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
    <style>
        body {
            background-image: url("background.png");
            background-size: cover;
            margin-left: 0px;
            margin-right: 0px;
        }
        #sidenavbutton {
            background: url(afterpay.png) no-repeat;
            width: 474px;
            height: 108px;
            float: right;
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var widget = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(widget));
            var index = ev.target.id;

            $.post("pagehandler.php", {
                action: "changeWidget",
                index: index,
                widget: widget
            }, function() {
        // Dingen die je wilt doen na het opslaan van de widget idk
            });

        }
    </script>

</head>
<body>
<button id="sidenavbutton" class="openbtn" onclick="openNav()"></button>
<?php require "sidebar.php"; ?>
<style>
    .wrapper {
        margin-left: 0.5%;
        margin-right: 0.5%;
        display: grid;
        grid-template-columns: 49.5% 49.5%;
        grid-gap: 7px;
        color: #444;
        height: 85%;
        border: 1px black;
    }
    .box {
        color: #fff;
        border-radius: 5px;
        padding: 7px;
        font-size: 150%;
        border-color: gray;
        border-style: dashed;
    }
    </style>
<div class="wrapper">
    <div id ="1" class="box a" ondrop="drop(event)" ondragover="allowDrop(event)">
    <?php if ($page->index1 == "reis") { ?>
        <?php require "reis_widget.php"?>
    <?php } ?>
<?php if ($page->index1 == "youtube") { ?>
<?php require "youtube_playlist.php"?>
<?php } ?>
<?php if ($page->index1 == "nieuws") { ?>
<?php require "nieuws_widget.php"?>
<?php } ?>
<?php if ($page->index1 == "calender") { ?>
<?php require "calender.php"?>
<?php } ?></div>
    <div id="2" class="box b" ondrop="drop(event)" ondragover="allowDrop(event)" >
<?php if ($page->index2 == "reis") { ?>
<?php require "reis_widget.php"?>
<?php } ?>
<?php if ($page->index2 == "youtube") { ?>
<?php require "youtube_playlist.php"?>
<?php } ?>
<?php if ($page->index2 == "nieuws") { ?>
<?php require "nieuws_widget.php"?>
<?php } ?>
<?php if ($page->index2 == "calender") { ?>
<?php require "calender.php"?>
<?php } ?></div>
    <div id="3" class="box c" ondrop="drop(event)" ondragover="allowDrop(event)" >
<?php if ($page->index3 == "reis") { ?>
<?php require "reis_widget.php"?>
<?php } ?>
<?php if ($page->index3 == "youtube") { ?>
<?php require "youtube_playlist.php"?>
<?php } ?>
<?php if ($page->index3 == "nieuws") { ?>
<?php require "nieuws_widget.php"?>
<?php } ?>
<?php if ($page->index3 == "calender") { ?>
<?php require "calender.php"?>
<?php } ?></div>
    <div id="4" class="box d" ondrop="drop(event)" ondragover="allowDrop(event)" >
<?php if ($page->index4 == "reis") { ?>
<?php require "reis_widget.php"?>
<?php } ?>
<?php if ($page->index4 == "youtube") { ?>
<?php require "youtube_playlist.php"?>
<?php } ?>
<?php if ($page->index4 == "nieuws") { ?>
<?php require "nieuws_widget.php"?>
<?php } ?>
<?php if ($page->index4 == "calender") { ?>
<?php require "calender.php"?>
<?php } ?></div>
</div>
</body>
</html>


