<?php
include_once "Stack.php";
$stack = new Stack(10);
$stack->push("one");
$stack->push("two");
$stack->push("three");
$stack->push("four");
$stack->push("five");
$stack->push("six");
$stack->top();
var_dump($stack->isEmpty());