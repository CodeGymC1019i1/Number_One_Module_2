<?php
include_once "ComparableCircleRadius.php";

$circleOne = new ComparableCircleRadius(5,"circle1");
$circleTwo = new ComparableCircleRadius(3,"circle2");

var_dump($circleOne->compareTo($circleTwo));