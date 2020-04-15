<script>
    window.setInterval("reloadIFrame1();", 64800000);
    function reloadIFrame1() {
        document.getElementById("hai").src="countdown_friday_widget.php";
    }
</script>
<iframe src="Countdown_Friday_content.php"
        style="border-radius: 15px"
        name="News_widget"
        scrolling="no"
        frameborder="1"
        height="100%"
        width="100%"
        id="hai"
        allowfullscreen>
</iframe>
