<?php

include_once 'config/config.php'; 
include_once 'model/note.php'; 
include_once 'controller/note.php';

if(!isset($_GET['action'])) $_GET['action'] = constant("DEFAULT_ACTION");


$controller = new noteController();

$dataToView = array();
$dataToView = $controller->{$_GET["action"]}();

include_once 'view/templates/header.php';
include_once 'view/'.$controller->view.'.php';
include_once 'view/templates/footer.php';

?>