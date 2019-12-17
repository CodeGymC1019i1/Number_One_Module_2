<?php

function countNumberOfOccur($numbers, $value){
    $count = 0;
    for($i=0; $i< count($numbers); $i++){
        if ($value==$numbers[$i]){
            $count++;
        }
    }
    return $count;
}
$numbers = [];
for($i = 0; $i<100; $i++){
    array_push($numbers,rand(0,100));
}

echo "Time occurs of " .countNumberOfOccur($numbers, 50);

