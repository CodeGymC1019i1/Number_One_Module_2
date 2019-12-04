<?php

class arr{

}
function findMin($arr){
    $min = $arr[0];
    $index = 0;
    for ($i =0; $i<count($arr); $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return "phần tử nhỏ nhất là: ".$min." nằm ở vị trí ".$index;
}

$arr = [10,6,5,4,5,2,3,6,8,7];
echo findMin($arr);