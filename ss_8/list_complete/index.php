<?php
include "MyList.php";
$listInteger = new MyList(8);
$listInteger->add(1);
$listInteger->add(6);
$listInteger->add(4);
$listInteger->add(2);
$listInteger->add(7);
var_dump($listInteger);
echo "<br>";
$listInteger->remove(1);
var_dump($listInteger);
echo "<br>";
echo $listInteger->getSize()."<br>";
if ($listInteger->checkContains(7)){
    echo "co ton tai trong mang";
}else{
    echo "ko ton tai trong mang";
};
echo $listInteger->indexOf(1);
echo $listInteger->get(2);
$listInteger->clear();
var_dump($listInteger);

