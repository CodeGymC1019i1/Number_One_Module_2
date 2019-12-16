<?php
function countElement($arr, $number){
    $count = 0;
    for ($i=0; $i<count($arr); $i++){
        if ($arr[$i] == $number){
            $count++;
        }
    }
    return $count;
}

$arr = [1,2,3,6,5,4,2,21,65,4,64,3,21,64,2,2,2,5,1,2,5,4];
$countTwo = countElement($arr, 2);
echo "số lần xuất hiện của số 2 trong mảng arr là: ".$countTwo;