<!DOCTYPE html>
<html>
<head>
    <style>
        body {background-color: #A7F3AF;}
    </style>
</head>
</html>
<?php
$rssfeedlink = "https://www.nu.nl/rss/Algemeen";
$domOBJ = new DOMDocument();
    $domOBJ->load($rssfeedlink);//XML page URL

$content = $domOBJ->getElementsByTagName("item");

 foreach( $content as $data )
 {
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $date = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
     if ($description == !null) {
         echo "&#10149<font size = \"5.5\"><b>$title</b></font><font size = \"4.5\"><br>$description<br><br></font> <sub>$date</sub> <hr>";
     }
 }
