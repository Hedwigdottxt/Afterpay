<?php
require "digital_klokwidget.php";
require "addpreset.php";
?>
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
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
            window.alert(ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
            window.alert(ev.target.id);
        }
    </script>

</head>
<body>
<?php require "sidebar.php";
require "2-2 layout.php" ?>
</body>
</html>
