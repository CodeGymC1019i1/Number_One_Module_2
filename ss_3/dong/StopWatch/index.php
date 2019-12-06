<?php
include_once "Stopwatch.php";

$time = new Stopwatch();
$arr_rand = [];
for ($i = 0; $i < 100000; $i++) {
    $arr_rand[$i] = mt_rand(0, 10000);
}
$time->start();
$time->getStartTime();
for ($i = 0; $i < 100000; $i++) {
    for ($j = $i; $j < 100000; $j++) {
        if ($arr_rand[$j] < $arr_rand[$i]) {
            $temp = $arr_rand[$i];
            $arr_rand[$i] = $arr_rand[$j];
            $arr_rand[$j] = $temp;
        }
    }
}
$time->end();
$time->getEndTime();
echo $time->getElapsedTime();