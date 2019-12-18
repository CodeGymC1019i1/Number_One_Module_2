<?php
    function GuessNumber($arr){
        $min = 0;
        $max = count($arr) - 1;
        $number = rand(1,100);
        while ($min < $max) {
            if($arr[$mid] > $number){
                $max = $mid - 1;
                $mid = ($min+$max)/2;
                $total = $max;
            } else if($arr[$mid] <= $number){
                $min = $mid + 1;
                $mid = ($min+$max)/2;
                $total = $min;
            } 
        }
        echo 'So may doan la: '.(int)$total;
    }
    $arr = range(1,100,1);
    $number = 50;
    GuessNumber($arr);

    // if(GuessNumber($arr) !== $number){
    //     // echo $number;
    // }
