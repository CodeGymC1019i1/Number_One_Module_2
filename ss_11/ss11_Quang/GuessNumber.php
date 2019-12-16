<?php
function GuessNumber($number)
{
    $min = 0;
    $max = 100;
    $numbermt = floor(rand($min, $max));
    echo "<br>";
    $count = 0;
    while ($min <= $max) {
        if ($numbermt < $number) {
            $min = $numbermt + 1;
            $numbermt = floor(rand($min, $max));
            var_dump($numbermt);
            echo "<br>";
            $count++;
        } else if ($numbermt > $number) {
            $max = $numbermt - 1;
            $numbermt = floor(rand($min, $max));
            var_dump($numbermt);
            echo "<br>";
            $count++;
        } else {
            return $numbermt . "<br>" . " số lần đoán là: " . $count;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['number'])) {
        echo "<script>alert('input result of this turn ')</script>";
    } else {
        $number = $_POST["number"];
        $guessNumber = GuessNumber($number);
        echo "Số muốn đoán là: " . $guessNumber;
    }
}
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
<form method="post">
    <input type="number" name="number" placeholder="Nhập số muốn máy tính đoán"><br>
    <button>Đoán</button>
</form>
</body>
</html>
