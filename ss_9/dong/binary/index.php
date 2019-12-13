<?php
include_once "Stack.php";
$number = 20;

$stack = new Stack(100);

while ($number >0) {
    $mod = $number % 2;
    $stack->push($mod);
    $number = floor($number / 2);
}

$binary = implode($stack->stack);
echo $binary;
