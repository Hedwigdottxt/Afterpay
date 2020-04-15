<?php require "checklogin.php"; ?>
<?php
class Page
{
    public $index1;
    public $index2;
    public $index3;
    public $index4;
}

if (!empty($_POST["action"])) {
    $action = $_POST["action"];

    switch ($action) {
        case "changeWidget":
            changeWidget();
            break;
    }
}

function changeWidget() {
    $index = $_POST["index"];
    $widget = $_POST["widget"];

    $page = getPage();

    if ($index == 1) {
        $page->index1 = $widget;
    }
    if ($index == 2) {
        $page->index2 = $widget;
    }
    if ($index == 3) {
        $page->index3 = $widget;
    }
    if ($index == 4) {
        $page->index4 = $widget;
    }
    savePage($page);
}

function getPage(): Page
{
    $pageData = file_get_contents('page.txt');
    $page = unserialize($pageData);
    return $page;
}

function savePage(Page $page)
{
    $pageData = serialize($page);
    $fp = fopen('page.txt', 'w');
    fwrite($fp, $pageData);
    fclose($fp);
}
