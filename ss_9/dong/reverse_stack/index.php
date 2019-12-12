<?php
include_once "Stack.php";

$stack = new Stack(10);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
for ($i = 0; $i < count($stack->stack); $i++) {
    $element = $stack->pop();
    $stack->push($element);
}
echo "<br> after: ";
var_dump($stack->stack);