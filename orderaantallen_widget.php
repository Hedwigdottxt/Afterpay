<script>
    window.setInterval("reloadIFrame8();", 3600000);
    function reloadIFrame8() {
        document.getElementById("order").src="server_widget.php";
    }
</script>
<iframe src="orderaantallen_content.php"
        style="border-radius: 15px"
        name="Orderaantallen_widget"
        scrolling="no"
        frameborder="1"
        height="100%"
        width="100%"
        id="order"
        allowfullscreen>
</iframe>