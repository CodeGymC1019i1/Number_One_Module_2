<?php
include "CircleRadiusComparator.php";

$circle1 = new CircleRadiusComparator(6, "circle1");
$circle2 = new CircleRadiusComparator(8, "circle2");
$test = $circle1->compareTo($circle2);
echo $test;