<?php
include_once "Dancer.php";

$player1=new Dancer("Qua","nam");
$player2=new Dancer("Quar","nam");
$player3=new Dancer("Quan","nam");
$player4=new Dancer("Quang","nam");

$dancer1=new SplQueue();
$dancer2=new SplQueue();
$dancer1->enqueue($player1);
$dancer1->enqueue($player2);
$dancer1->enqueue($player2);
$dancer1->enqueue($player3);
var_dump($dancer1);
die();

$player11=new Dancer("Quang","nữ");
$player21=new Dancer("Quar","nữ");
$player31=new Dancer("Quan","nữ");
$player41=new Dancer("Quang","nữ");

$dancer2->enqueue($player11);
$dancer2->enqueue($player21);
$dancer2->enqueue($player31);
$dancer2->enqueue($player41);

