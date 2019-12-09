<?php
include_once "Point.php";
include_once "movablePoint.php";

$point = new Point(10, 10);
echo $point;

$movablePoint = new MovablePoint(5,5,10,10);
echo "<br>before call move() method \$movablePoint => ". $movablePoint;
$movablePoint->move();
echo "<br>after call move() method \$movablePoint => ". $movablePoint;