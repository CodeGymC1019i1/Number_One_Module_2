<?php
function select_sort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$min];
        $arr[$min] = $arr[$i];
        $arr[$i] = $temp;
    }
    return $arr;
}
