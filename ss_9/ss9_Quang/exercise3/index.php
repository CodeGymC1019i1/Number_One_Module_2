<?php
include_once "ReverseNumber.php";

$reverseNumber=new ReverseNumber(5);
$arr1=$reverseNumber->push();
var_dump($arr1);
echo '<br>';
$arr2=$reverseNumber->pop();
var_dump($arr2);
