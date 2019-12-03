<!doctype html>
<html lang="en">
<head>
    <style>
        input {
            width: 200px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Số tiền gửi: <input type="number" name="investmentAmount"/><br>
    Lãi suất gửi: <input type="text" name="yearlyRate"/><br>
    Số năm gửi: <input type="number" name="numberOfYears"><br>
    <input type="submit" id="submit" value="Calculate">
</form>
<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $investmentAmount = $_POST['investmentAmount'];
        $yearlyRate = floatval($_POST['yearlyRate']);
        $numberOfYears = $_POST['numberOfYears'];
        $totalAmount = $investmentAmount*pow(1+$yearlyRate,$numberOfYears);
        echo "Số tiền tương lai có là: " .$totalAmount;
    }
?>
</body>
</html>
