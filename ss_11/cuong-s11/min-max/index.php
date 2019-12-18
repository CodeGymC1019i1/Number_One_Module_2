<?php
function FindMin($arr){
    $min = $arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i] < $min)
        $min = $arr[$i];
    }
    return $min;
}

function FindMax($arr){
    $max = $arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i] > $max)
        $max = $arr[$i];
    }
    return $max;
}

$nums = [];
for($i=0;$i<100;$i++){
    $nums[$i] = rand(1, 101);
}
foreach($nums as $num){
    echo $num." ";   
}
$minValue = FindMin($nums);
$maxValue = FindMax($nums);

echo "<br/>phan tu nho nhat: ".$minValue;
echo "<br/>phan tu lon nhat: ".$maxValue;