<?php

if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}

define('CMS_FOLDER', 'cms/');
require_once CMS_FOLDER . 'weasel.php';

?>
