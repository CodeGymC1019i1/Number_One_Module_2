<?php
include_once "rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->display()."<br>";
echo "diện tích của hình chữ nhật vừa tạo: ".$rectangle->getArea()."<br>";
echo "chu vi của hình chữ nhật vừa tạo: ".$rectangle->getPerimeter()."<br>";