<?php
include_once "LowToBinary.php";
$number = 20;
$stack = new LowToBinary($number);
$numbers = $stack->push();
foreach ($numbers as $item) {
    $binary .= $item;
}
echo 'Số nhị phân của '.$number.' là '.$binary;