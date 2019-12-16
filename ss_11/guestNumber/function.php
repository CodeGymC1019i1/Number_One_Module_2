<?php
function createArray(){
    $arr = [];
    for ($i = 0; $i < 100; $i++) {
        array_push($arr, $i);
    }
    return $arr;
}

function computerGuest($min, $max)
{
    return $computerGuest = floor(rand($min, $max));
}
