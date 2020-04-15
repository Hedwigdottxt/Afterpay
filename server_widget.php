<script>
    window.setInterval("reloadIFrame4();", 3600000);
    function reloadIFrame4() {
        document.getElementById("serverreload").src="server_widget.php";
    }
</script>
<iframe src="server_widget_content.php"
        style="border-radius: 15px; background-color: #A7F3AF"
        name="server_widget"
        scrolling="no"
        frameborder="1"
        height="100%"
        width="100%"
        id="serverreload"
        allowfullscreen>
</iframe>
