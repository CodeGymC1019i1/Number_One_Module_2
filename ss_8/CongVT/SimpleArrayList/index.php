<?php

include "ArrayList.php";

$listArray = new ArrayList();
$listArray->add(1);
$listArray->add(2);
$listArray->add(3);
$listArray->add(4);

echo $listArray->get(1)."<br>";
echo $listArray->get(-1);
