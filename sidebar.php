<?php $nameErr = ""; ?>
<style>
    .sidepanel  {
        width: 0;
        position: fixed;
        z-index: 1;
        height: 100%;
        top: 0;
        left: 0;
        background-color: white;
        opacity: 0.96;
        overflow-x: hidden;
        overflow-y: scroll;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidepanel a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidepanel a:hover {
        color: #f1f1f1;
    }

    .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
    }

    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
        background: url("afterpay.png");
    }

    .openbtn:hover {
        background-color:#444;
    }
    #PresetsForm {
        background-color: white;
        font-color: white;
    }
</style>
<script>
    function openNav() {
        document.getElementById("mySidepanel").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("mySidepanel").style.width = "0";
    }

    function opennav() {
        var x = document.getElementById("PresetsForm");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function openwidgets() {
        var x = document.getElementById("layouteditor");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>


<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div id="layouteditp" style="display:none;">
        <form method="post">
            Choose widget 1:
            <select name="widget 1">
                <option value="reis">reis</option>
                <option value="twitter">twitter</option>
                <option value="nieuws">nieuws</option>
            </select><br>
            Preset name:<br> <input type="text" name="presetname"><?php echo $nameErr ?><br>
            <br>
            <input type="submit" name="makingpresetsubmit" value="Create preset" /><hr/><br/>
            <br>

        </form>
    </div>
    <div id="reis" draggable="true" ondragstart="drag(event)"><a>Bushalte Widget</a></div>
    <div id="youtube" draggable="true" ondragstart="drag(event)"><a>Youtube Widget</a></div>
    <div id="calender" draggable="true" ondragstart="drag(event)"><a>Kalender Widget</a></div>
    <div id="nieuws" draggable="true" ondragstart="drag(event)"><a>Nieuws Widget</a></div>
    <div id="order" draggable="true" ondragstart="drag(event)"><a>Orderaantallen Widget</a></div>
    <div id="verjaardag" draggable="true" ondragstart="drag(event)"><a>Verjaardag Widget</a></div>
    <hr>
    <div id="PresetsForm">
        <form method="post" style="display:none;">
            Choose layout:<br>
            <select name="layout">
                <option value="2-2">2-2</option>
            </select><br>
            Preset name:<br> <input type="text" name="presetname"><?php echo $nameErr ?><br>
            <p></p><br>
            <input onclick="openwidgets()" type="submit" name="makingpresetsubmit" value="Create preset" />
            <hr/>
        </form>
        <a id="reload" onclick="ReloadPage()">Save preset</a>
        <hr>
        <a id="reload" onclick="Logout()">Loguit</a>
    </div>
    <hr>
</div>
<script>
    function Logout() {
        window.location="loginpage.php";
    }
</script>

