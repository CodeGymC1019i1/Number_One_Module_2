<?php
include "MyList.php";
$listInteger = new MyList(8);
$listInteger->add(1);
$listInteger->add(1);
$listInteger->add(1);
$listInteger->add(1);
$listInteger->add(1);
$listInteger->add(1);
$listInteger->add(1);
$listInteger->add(1);
var_dump($listInteger);
echo "<br>";
$listInteger->add(30);
var_dump($listInteger);
echo "<br>";
$listInteger->add(10,3);