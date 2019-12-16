<?php
function MinArray($array)
{
    $min = $array[0];
    for ($i = 1; $i < count($array)-1; $i++) {
        if ($min > $array[$i]) {
            $min = $array[$i];
        }
    }
    return $min;
}

function MaxArray($array)
{
    $max = $array[0];
    for ($i = 1; $i < count($array)-1; $i++) {
        if ($max < $array[$i]) {
            $max = $array[$i];
        }
    }
    return $max;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 0, 11, 11];
$min = MinArray($array);
echo 'Số nhỏ nhất là: '.$min."<br>";
$max = MaxArray($array);
echo "Số lớn nhất là: ".$max;
