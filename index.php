<?php
if (isset($_GET['page']) && file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . "npl" . DIRECTORY_SEPARATOR . $_GET['page'] . ".php"))
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . "npl" . DIRECTORY_SEPARATOR . $_GET['page'] . ".php");
else
    listPages();

function listPages() {
    $scan = array_filter(scandir('./npl'), function($item) {
        return !is_dir('./npl/' . $item);
    });

    foreach ($scan as $value) {
        $filename = substr($value, 0, -4);
        echo '<a href="/?page='. $filename .'">' . $filename . '</a><br />';
    }
}

### FUNCTIONS

function setBreadCrumb() {
    echo '123';
}