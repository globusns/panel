<?php
ob_start();
session_start();
require_once 'config.php';
require_once 'db.php';

#AUTOLOAD

function __autoload($className){
    require_once $className.'.php';
}


$controller = new Controller();
$controller->isLoggedIn();