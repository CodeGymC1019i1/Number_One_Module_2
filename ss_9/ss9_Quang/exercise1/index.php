<?php
include_once "Stack.php";

$stack = new Stack(10);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);

echo "Trước";
var_dump($stack);
echo "<br>";

echo $stack->pop()."<br>";

echo "Sau";
var_dump($stack);
echo "<br>";

echo "Phần tử đầu tiên ".$stack->top();
