<?php


define("_root",dirname(__FILE__));
define("_api",_root.'/api');
define("_core",_root.'/core');
define("_lib",_core.'/lib');

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

// load basic classes
require_once _lib.'/controller.class.php';
require_once _lib.'/model.class.php';

// get all the rest controllers files
$restControllers = glob("api/*.rest.php");

// require each of them - support new controllers without touching this file
foreach($restControllers AS $restController) {
    require_once $restController;
}

$app->get("/",function(){
    
    include 'app/index.html';
    exit();
});

$app->contentType("application/json");

$app->run();


?>