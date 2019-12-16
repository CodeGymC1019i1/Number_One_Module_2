<?php
include "ComparatorCrile.php";

$circleOne = new ComparatorCrile('circleOne', 8);
$circleTwo = new ComparatorCrile('circleTwo', 2);

var_dump($circleOne->compareTo($circleTwo));