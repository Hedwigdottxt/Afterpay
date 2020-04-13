<style>
    .wrapper {
        margin-left: 0.5%;
        display: grid;
        grid-template-columns: 49.5% 49.5%;
        grid-gap: 10px;
        color: #444;
        height: 85%;
    }
    .box {
        background-color: #444;
        color: #fff;
        border-radius: 5px;
        padding: 20px;
        font-size: 150%;
    }
    </style>
<div class="wrapper">
    <div id ="box a" class="box a" ondrop="drop(event)" ondragover="allowDrop(event)" >+</div>
    <div id ="box b" class="box b" ondrop="drop(event)" ondragover="allowDrop(event)" >+</div>
    <div id ="box c" class="box c" ondrop="drop(event)" ondragover="allowDrop(event)" >+</div>
    <div id ="box d" class="box d" ondrop="drop(event)" ondragover="allowDrop(event)" >+</div>
</div>
