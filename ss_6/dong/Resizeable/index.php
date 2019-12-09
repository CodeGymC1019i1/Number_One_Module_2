<?php
include "Resizeable.php";
include "Circle.php";
include "Square.php";
include "Rectangle.php";

$circle = new Circle("circle", 10);
echo "circle before resize has radius = " . $circle->radius."<br>";
$circle->resize(30);
echo "circle after resize has radius = " . $circle->radius."<br>";


$rectangle = new Rectangle("rectangle", 10, 5);
echo "rectangle before resize has width = " . $rectangle->width . ", height = " . $rectangle->height."<br>";
$rectangle->resize(20);
echo "rectangle after resize has width = " . $rectangle->width . ", height = " . $rectangle->height."<br>";

$square = new Square("square", 10);
echo "square before resize has width = " . $square->width."<br>";
$square->resize(40);
echo "square after resize has width = " . $square->width;
