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
    Inventment Amount:<input type="number" name="inventmentAmount"></br>
    Yearly Interest Rate:<input type="number" name="yearlyInterestRate"></br>
    Number of Years:<input type="number" name="numberofYears"></br>
    <input type="submit" value="Calculator">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventmentAmount = $_POST['inventmentAmount'];
    $yearlyInterestRate = $_POST['yearlyInterestRate'];
    $numberofYears = $_POST['numberofYears'];
    $futureValueCalculator = $inventmentAmount + ($yearlyInterestRate * $numberofYears);
    echo "Giá trị tương lai sẽ nhận được là : ". $futureValueCalculator;
}
?>
</body>
</html>
