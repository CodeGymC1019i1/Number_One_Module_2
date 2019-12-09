<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";


$circle = new Circle("circle", 3);
echo "circle area is: ".$circle->calculateArea()."<br>";
echo "cicrle perimeter is: ".$circle->calculatePerimeter()."<br>";

$cylinder = new Cylinder("cylinder", 3,4);
echo "cylinder area is: ".$cylinder->calculateArea()."<br>";
echo "cylinder perimeter is: ".$cylinder->calculatePerimeter()."<br>";

$rectangle = new Rectangle("rectangle", 10, 20);
echo "rectangle area is: ".$rectangle->calculateArea()."<br>";
echo "rectangle perimeter is: ".$rectangle->calculatePerimeter()."<br>";

$square = new Square("square", 10, 10 );
echo "square area is: ".$square->calculateArea()."<br>";
echo "square perimeter is: ".$square->calculatePerimeter()."<br>";


