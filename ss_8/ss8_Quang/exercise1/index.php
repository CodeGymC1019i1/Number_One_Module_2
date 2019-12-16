<?php
include_once "MyList.php";

$myListTest=new MyList(10);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
$myListTest->add(1);
 $myListTest->add(10,3);
 var_dump($myListTest);
