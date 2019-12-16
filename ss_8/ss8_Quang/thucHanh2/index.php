<?php
include_once "Node.php";
include_once "LinkList.php";

$linkList=new LinkList();
$linkList->insertFirst(11);
$linkList->insertFirst(22);
$linkList->insertLast(44);
$linkList->insertLast(55);
$linkList->insertLast(55);
$linkList->insertLast(55);
$linkList->insertLast(55);

$getCount=$linkList->getCount();
$linkData=$linkList->readList();

echo "Số phần tử là: ".$getCount.'<br>';
echo implode("-",$linkData);