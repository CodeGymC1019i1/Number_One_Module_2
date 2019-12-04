<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    function smallest(){
        $array = [22,4,5,7,9,12,45,67];
        $min = $array[0];
        $index = 0;
        for($i=0;$i<count($array);$i++){
            if($min > $array[$i]){
            $min = $array[$i];
            $index = $i;
            }
            };
            echo "giá trị nhỏ nhất trong mảng là ".$min." vị trí thứ ".$index."<br/>";
    };

    function biggest(){
        $array = [[3,5,20,7,9],[6,2,4,8,10]];
        $max = $array[0][0];
        for($i=0;$i<count($array);$i++){
            for($j=0;$j<count($array[$i]);$j++){
                if($array[$i][$j]>$max)
                $max = $array[$i][$j];
            }
        };
        echo "giá trị lớn nhất là ".$max;
    };
    smallest();
    biggest();
    ?>
</body>

</html>