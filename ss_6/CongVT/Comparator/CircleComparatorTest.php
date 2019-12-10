<?php
use Circle\Circletest;
include "Circletest.php";
include "CircleComparator.php";

$circleOne = new Circletest("circleOne", 6);
$circleTwo = new Circletest("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));