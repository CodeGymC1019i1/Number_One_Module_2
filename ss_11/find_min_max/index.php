<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$numbers = [];
for ($i = 0; $i<100; $i++){
    $numbers[$i] = rand(1,101);
}
$minValue = findMin($numbers);

echo "min = $minValue <br>";


function findMax($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
$maxValue = findMax($numbers);

echo "max = $maxValue";