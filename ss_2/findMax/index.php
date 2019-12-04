<?php
function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }

    }
    return $max;
}

$arr = [
    [10,2,3,6,5],
    [1,52,5,12,1]
];
echo findMax($arr);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<form method="post">-->
<!--    <input type="number" name="numberRow">-->
<!--    <input type="number" name="numberCol">-->
<!--    --><?php //for ($i = 0; $i < $_POST["numberRow"]; $i++): ?>
<!--        <input type="number" name="elementRow"><br>-->
<!--    --><?php //array_push($arr, $_POST["elementRow"]) ?>
<!--        --><?php //for ($j = 0; $j < $_POST["numberCol"]; $j++): ?>
<!--            <input type="number" name="elementCol" style="width: 20px">-->
<!--            --><?php //array_push($arr, $_POST["elementCol"]) ?>
<!--        --><?php //endfor; endfor; ?>
<!---->
<!--    <input type="submit" value="OK">-->
<!--</form>-->

</body>
</html>