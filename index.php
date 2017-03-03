<?php

//set error displaying
//ini_set('display_errors', 'On');
//error_reporting(E_ALL | E_STRICT);

//define where the document root is, because php doesn't know, so we need to tell him
define('DOCROOT', __DIR__);

//var_dump(__DIR__); //searches for source directory
//var_dump(__FILE__);//searches for the path to the current file

//start the bootstraping process
require_once(DOCROOT.'/system/project/config/bootstrap.php');

//start the application

//we get the name of the controller($_GET['page'], 'home', 'error404')
$controller_name = router::getControllerName();


//we load the page file from the controller name
router::runController($controller_name);
?>

