<?php
include "Colorable.php";
include "Square.php";
include "Rectangle.php";
include "Circle.php";

$shape[0] = new Circle("circle", 10);
$shape[1] = new Rectangle("rectangle", 5, 10);
$shape[2] = new Square("square", 5);

foreach ($shape as $item) {
    echo "erea of ".$item->name." = ".$item->getArea()."<br>";
    if ($item instanceof Square){
        echo $item->howToColor();
    }
}