<?php

include_once "Application.php";

echo "total objects count: ".Application::$count."<br>";
$app = new Application("App one");
echo "total objects count: ".Application::$count."<br>";
echo $app .'<br/>';
