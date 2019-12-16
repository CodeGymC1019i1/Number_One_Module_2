<?php
include_once "ArrayList.php";

$arrayList=new ArrayList();
$arrayList->add(1);
$arrayList->add(2);
$arrayList->add(3);

echo $arrayList->get(1);