<script>
    window.setInterval("reloadIFrame2();", 300000);
    function reloadIFrame2() {
        document.getElementById("Reloadiframenieuws").src="nieuws_widget.php";
    }
</script>
<?php require "checklogin.php"; ?>
<iframe src="nieuws_widget_content.php"
        style="border-radius: 15px"
        name="News_widget"
        scrolling="no"
        frameborder="1"
        height="100%"
        width="100%"
        align="center"
        id="Reloadiframenieuws">
        allowfullscreen>
</iframe>
