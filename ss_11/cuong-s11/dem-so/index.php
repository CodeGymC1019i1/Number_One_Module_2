    <?php
    function NumberShow($arr,$value){ 
        $count = 0;
        for($i=0;$i<count($arr);$i++){
        if($value == $arr[$i])
        $count++;
        }
        return $count;
    }

    $numbers = [];
        for($i=0;$i<100;$i++){
            $numbers[$i] = rand(0, 100);
        }
        foreach($numbers as $number){
            echo $number." ";
        }
        $diplay = NumberShow($numbers,10);
        echo '<br/> so lan xuat hien cua phan tu:'.$diplay;