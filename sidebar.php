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

    function myFunction() {
        var x = document.getElementById("PresetsForm");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>


<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a onclick="myFunction()">Presets toevoegen</a>
    <div id="PresetsForm" style="display:none;">
        <form method="post">
            Choose layout:
            <select name="layout">
                <option value="2-2">2-2</option>
                <option value="1-2">1-2</option>
                <option value="2-1">2-1</option>
            </select><br>
            Preset name:<br> <input type="text" name="presetname"><?php echo $nameErr ?><br>
            <p></p><br>
            <input type="submit" name="makingpresetsubmit" value="Create preset" /><hr/><br/>
            <br>

        </form>
    </div>
    <?php require "presetname_list.php";?>
</div>

<button class="openbtn" onclick="openNav()">☰ Toggle Sidepanel</button>
