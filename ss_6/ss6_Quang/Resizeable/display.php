<?php
include_once "Resizeable.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
$arr=[];
$circle=new Circle("Circle",10);
$rectangle=new Rectangle("Rectangle",10,10);
$square=new Square("Square",10);
$percent=rand(1,100);
echo $percent."<br>";
 echo $circle->getName()." ".$circle->resize($percent)."<br>";
 echo $rectangle->getName()." ".$rectangle->resize($percent)."<br>";
 echo $square->getName()." ".$square->resize($percent)."<br>";
