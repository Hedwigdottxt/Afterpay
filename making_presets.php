<?php
require "digital_klokwidget.php";
require "addpreset.php";
include 'pagehandler.php';
$page = getPage();

if ($page->index1 == "reis") { ?>
alert("widget 1 is reis!");
<?php } ?>
<!doctype html>
<head>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("background.png");
            background-size: cover;
            margin-left: 0px;
            margin-right: 0px;
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
<?php require "sidebar.php"; ?>
<style>
    .wrapper {
        margin-left: 0.5%;
        display: grid;
        grid-template-columns: 49.5% 49.5%;
        grid-gap: 10px;
        color: #444;
        height: 85%;
        border: 1px black;
    }
    .box {
        color: #fff;
        border-radius: 5px;
        padding: 20px;
        font-size: 150%;
        border-color: gray;
        border-style: dashed;
    }
    </style>
<div class="wrapper">
    <div id ="1" class="box a" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
    <div id ="2" class="box b" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
    <div id ="3" class="box c" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
    <div id ="4" class="box d" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
</div>
<div id="reis" draggable="true" ondragstart="drag(event)"><?php require "reis_widget.php"?></div>
</body>
</html>
