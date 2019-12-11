<?php
include "StopWatch.php";

$elapsedTime = new StopWatch;
$array = [];
for ($i = 0; $i < 1000; $i++) {
    $array[$i] = rand();
}
$elapsedTime->start();
for($i=0;$i<=1000;$i++)
{
    for($j=$i+1;$j<=1000;$j++)
    {
        if($array[$j] < $array[$i])
        {
            $min = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $min;
        }
    }
    //print $array[$i]."\n";

}
$elapsedTime->end();
echo($elapsedTime->getElapsedTime());