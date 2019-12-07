<?php
include_once "Application.php";
$app1 = Application::getInstance();
$app2 = Application::getInstance();
var_dump($app1);
var_dump($app2);
//$app3 = new Application(); //error
