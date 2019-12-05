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
    include "equation.php";
    $equation = new QuadraticEquation(1,2,3);

    if($equation->getDiscriminant() > 0){
        echo "Phuong trinh co 2 nghiem: ".$equation->getRoot1()." va ".$equation->getRoot2();
    } else if($equation->getDiscriminant() == 0){
        echo "Phuong trinh co nghiem kep la:".$equation->getRoot3();
    } else{
        echo "Phuong trinh vo nghiem";
    }
    ?>
</body>
</html>