<?php
if (isset($_GET['page']) && file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . "npl" . DIRECTORY_SEPARATOR . $_GET['page'] . ".php"))
    require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . "npl" . DIRECTORY_SEPARATOR . $_GET['page'] . ".php");
