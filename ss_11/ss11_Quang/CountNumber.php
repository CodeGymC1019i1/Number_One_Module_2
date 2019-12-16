<?php
function CountNumber($value,$numbers){
    $count=0;
    for($i=0;$i<count($numbers)-1;$i++){
        if($value==$numbers[$i]){
            $count++;
        }
    }
    return $count;
}

$numbers=[1,2,3,2,3,2,3,2,3,2];
$value=2;
$countValue=CountNumber($value,$numbers);
echo "Số lần xuất hiện của ".$value." là: ".$countValue;