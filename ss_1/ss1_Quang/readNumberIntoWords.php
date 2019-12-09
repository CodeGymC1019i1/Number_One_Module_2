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
<h2>Đọc số thành chữ</h2>
<form method="post">
    <input type="number" name="nhapso">
    <input type="submit" value="Đọc">
</form>
<?php
$number = [
    'unit' => ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nice'],
    'exception' => ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'],
    'dozen' => ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety']
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST["nhapso"];
    if (floor($inputNumber / 100) >0) {
        $hunderds = $number['unit'][floor($inputNumber / 100) - 1] . ' hundreds and ';
    }
    if (floor($inputNumber % 100 / 10) > 1) {
        $dozens = $number['dozen'][floor($inputNumber % 100 /10) - 2].' ';
        if(floor($inputNumber % 100 % 10)){
            $unit=$number['unit'][floor($inputNumber % 100%10) - 1];
        }
    } else if (floor($inputNumber % 100 % 10) == 1) {
        $dozens = $number['exception'][floor($inputNumber % 100 / 10)].' ';
    }
    echo $hunderds . $dozens.$unit;
}
?>
</body>
</html>
