<?php require "digital_klokwidget.php";?>
<!doctype html>
<head>
    <style>
        body {
            background-image: url("background.png");
            background-size: cover;
            margin-left: 0px;
            margin-right: 0px;
        }
    </style>
</head>
<style>
    button {
        height:120px;
        width:500px;
        border: 1px;
        background: url("afterpay.png");
        float: right;
        margin-right: -40px ;
        background-repeat: no-repeat;
    }
    #container {
        overflow: hidden;
        width: 100%;
    }
    #inner {
        overflow: hidden;
        width: 2000px;
    }

</style>
<button onclick="window.location.href = '/github afterpay/Afterpay/preset_test.php';">    </button>
<!DOCTYPE HTML>
<html>
<head>
    <style>
        #div1 {
             width: 23%;
             height: auto;
             padding: 10px;
             border: 1px solid black;
             float: left;
         }
        #div2 {
            width: 23%;
            height: auto;
            padding: 10px;
            border: 1px solid black;
            float: left;
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
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<div id="container"><div id="inner"><div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div><div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div><div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div></div>
<br>
<div id="drag1" draggable="true" ondragstart="drag(event)" width="100%" height="500"> <?php include('reis_widget.php'); ?></div>
<div id="container"><div id="inner">
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>
</div>



</body>
</html>


