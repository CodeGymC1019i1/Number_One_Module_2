<?php
include_once 'stack.php';

$stack = new Stack(10);
$stack->push(20);
$stack->push(10);
$stack->push(30);
var_dump($stack);
echo "<br/>";
$stack->pop();
var_dump($stack);

echo "<br/>Phan tu dau tien la ".$stack->top();