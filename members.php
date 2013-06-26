<?php

require_once 'config.php';
require_once 'db.php';


$controller = new Controller_User;
$controller->getUser($_SESSION['user_id']);

?>
