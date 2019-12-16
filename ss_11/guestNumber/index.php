<?php
include_once "function.php";
$numbers = createArray();
$number = 60;

$min = $numbers[0];
$max = $numbers[count($numbers) - 1];

$computerGuest = computerGuest($min, $max);
echo "số máy đoán trong khoảng từ:  ".$min." đến ".$max." là :" . $computerGuest . "<br>";
while ($min < $max) {
    if ($computerGuest < $number) {
        $min = $computerGuest + 1;
        $computerGuest = computerGuest($min, $max);
        echo "số máy đoán trong khoảng từ:  ".$min." đến ".$max." là :" . $computerGuest . "<br>";
    } elseif ($computerGuest > $number) {
        $max = $computerGuest - 1;
        $computerGuest = computerGuest($min, $max);
        echo "số máy đoán trong khoảng từ:  ".$min." đến ".$max." là :" . $computerGuest . "<br>";
    } else {
        echo "<script> alert('you win');</script>";
        break;
    }
}