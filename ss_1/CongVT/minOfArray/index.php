<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Min of an Array</title>
</head>
<body>
<div>
    <form action="" method="post">
        <p>Input an array</p>
        <input type="text" name="inputArray">
        <input type="submit" value="Check ">
    </form>
</div>
<?php

class testArray
{
    public $array;
    public $min;
    public $index;
    public function __construct($array)
    {
        $this->array = $array;
    }

    function minArr()
    {
        $minPosition = 0;

        for ($i = 0; $i < count($this->array); $i++) {
            if ($this->array[$i] < $this->array[$minPosition]) {
                $minPosition = $i;
            }
        }
        return $minPosition;
    }
}


    $array = explode(',',$_POST['inputArray']);
    //print_r($array); die();
    $arrayTest = new testArray($array);
    echo "Vi tri nho nhat la: " . $arrayTest->minArr();

?>
</body>
</html>
