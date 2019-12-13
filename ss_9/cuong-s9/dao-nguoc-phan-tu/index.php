<?php
include_once 'reverse.php';

$reverse = new Reverse(5);

var_dump($reverse->push());
echo "<br/>";
var_dump($reverse->pop());