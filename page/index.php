<?php
$page = $_GET['page'];

require_once ('header.php');

//if ($page=='news') {
//    require_once ('contents2.php');
//} else if ($page == 'content') {
//    require_once ('contents.php');
//}

switch($page) {
    case "content" :
        require_once ('contents.php');
        break;
    case "news" :
        require_once ('contents2.php');
        break;
    default :
        require_once ('contents.php');
        break;
}

require_once ('tail.php');

