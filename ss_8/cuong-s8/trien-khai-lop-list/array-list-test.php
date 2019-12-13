<?php
include_once 'array-list.php';

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(4);

echo $listInteger->get(1);
echo $listInteger->get(2);