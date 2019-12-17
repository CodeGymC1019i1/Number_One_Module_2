<?php
include_once "NewStack.php";

$stack = new NewStack();
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8];
$length = count($array);
for ($i = 0; $i < $length; $i++) {
    $stack->push($array[0]);
}
$reverseArray = [];
for ($i = 0; $i < $length; $i++) {
    $reverseArray[$i] = ($stack->pop());
}

var_dump($reverseArray);