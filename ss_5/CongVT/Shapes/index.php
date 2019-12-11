<?php

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
include_once ('Cube.php');

$circle = new Circle('Circle01', 3);
echo "Circle area: ". $circle->calculateArea(). '<br>';
echo "Circle perimeter:". $circle->calculatePerimeter()."<br>";

$cylinder = new Cylinder('Cylinder01', 3,4);
echo "Cylinder area: ". $cylinder->calculateArea().'<br>';
echo "Cylinder volume: ". $cylinder->calculateVolume()."<br>";

$rectangle = new Rectangle('Rectangle01', 3,4);
echo "Rectangle area: ".$rectangle->calculateArea()."<br>";
echo "Rectangle perimeter: ".$rectangle->calculatePerimeter()."<br>";

$square = new Square("Square01", 3);
echo "Square area: ".$square->calculateArea()."<br>";
echo "Square perimeter: ".$square->calculatePerimeter()."<br>";

$cube = new Cube("Cube01", 3);
echo "Cube Area: ".$cube->calculateArea()."<br>";
echo "Cube volume: ".$cube->calculateVolume();

