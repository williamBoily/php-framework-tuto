<?php

use App\Core\Application;

require_once dirname(__FILE__, 2) . "/vendor/autoload.php";

$app = new Application();

$app->router->get('/', function(){
	return "Hello World";
});
$app->router->get('/user', function(){
	return "Hey user !!";
});


$app->run();
