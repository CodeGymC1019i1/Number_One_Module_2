<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Max of two dimension matrix</title>
</head>
<body>
<div>
    <form action="" method="post" style="width: 300px; height: 150px; border: 1px solid black; padding: 5px">
        <label for="">Input number of row of matrix</label>
        <input type="number" name="row">
        <br>
        <label for="">Input number of column of matrix</label>
        <input type="number" name="column">
        <br>
        <input type="submit" value="Generate">
    </form>

</div>
<?php
function randomMatrix($row, $column)
{
    global $randomMatrix;
    for ($i = 0; $i < $row; $i++) {
        echo '<br>';
        for ($j = 0; $j < $column; $j++) {
            $randomMatrix[$i][$j] = rand(0, 99);
            echo ' '.$randomMatrix[$i][$j];
        }
    }
    $max = $randomMatrix[0][0];
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {
            if ($randomMatrix[$i][$j] > $max) {
                $max = $randomMatrix[$i][$j];
            }
        }
    }
    return '<br>Max of matrix is: '.$max;
}

//function maxOfMatrix(){
//
//}

$matrixRow = $_POST['row'];
$matrixColumn = $_POST['column'];
echo(randomMatrix($matrixRow, $matrixColumn));

?>
</body>
</html>
