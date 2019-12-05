<?php
function maxArray($arr){
    $max=$arr[0][0];
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
            if($arr[$i][$j]>$max){
                $max=$arr[$i][$j];
            }
        }
    }
    echo 'Số lớn nhất là: '.$max;
}
$array=[
    [1,2,3,5,6,7,9],
    [1,8,6,3,10]
];
maxArray($array);
?>
