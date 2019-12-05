<?php
function minArray($arr){
    $min=$arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    }

   return $min;
}
$array=[1,2,3,4,5,6,7,8,1,10];
$min=minArray($array);
echo "Số nhỏ nhất là: ".$min;
?>