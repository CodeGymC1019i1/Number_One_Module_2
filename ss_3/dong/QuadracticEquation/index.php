<?php
include_once "QuadraticEquation.php";
$calc = new QuadraticEquation(1, 3, 1);
if ($calc->getDiscriminant() == 0) {
    echo "phuong tring co 1 nghiem duy nhat la: " . $calc->getRoot3();
} else if ($calc->getDiscriminant() > 0) {
    echo "phuong trinh co 2 nghiem. nghiem thu nhat la: " . $calc->getRoot1() . " nghiem thu hai la: " . $calc->getRoot2();
} else {
    echo "phuong trinh vo nghiem";
}
