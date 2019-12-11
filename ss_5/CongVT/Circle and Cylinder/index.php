<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle("Circle one", 'red', 5);
$Cylinder = new Cylinder("Cylinder one", 'blue', 5, 9);

echo $circle->toString();
echo $Cylinder->toString();