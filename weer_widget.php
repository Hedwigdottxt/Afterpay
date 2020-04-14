<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #A7F3AF;
            height: 400px;
        }
    </style>
</head>
</html>
<?php
$rssfeedlink = "https://data.buienradar.nl/1.0/feed/xml/rssbuienradar";
$domOBJ = new DOMDocument();
$domOBJ->load($rssfeedlink);//XML page URL

$content = $domOBJ->getElementsByTagName("item");

foreach( $content as $data )
{
    $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
    $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
    if ($description == !null) {
        echo "&#10149<font size = \"3.5\"><b>$title</b></font><font size = \"2.5\"><br>$description<br></font>";
    }
}
