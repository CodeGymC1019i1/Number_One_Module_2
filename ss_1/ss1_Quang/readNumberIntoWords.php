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
    'unit' => ['1' => 'one', '2' => 'two', '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six', '7' => 'seven', '8' => 'eight', '9' => 'nice'],
    'exception' => ['10' => 'ten', '11' => 'eleven', '12' => 'twelve', '13' => 'thirteen', '14' => 'fourteen', '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen', '18' => 'eighteen', '19' => 'nineteen'],
    'dozen' => ['20' => 'twenty', '30' => 'thirty', '40' => 'forty', '50' => 'fifty', '60' => 'sixty', '70' => 'seventy', '80' => 'eighty', '90' => 'ninety'],
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST["nhapso"];
    foreach ($number as $so => $doc) {
        for ($i = 1; $i < 10; $i++){
            if (floor($inputNumber / 100) >= 1) {
                $hunderds = $doc[$i] . 'hundreds and ';
                if (floor($inputNumber % 100 % 10) > 1) {
                    $dozens = $doc[$i * 10];
                }
            }

        }
    }
    echo $hunderds.$dozens;
}
?>
</body>
</html>
