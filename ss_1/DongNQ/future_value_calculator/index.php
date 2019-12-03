<html>
<head>
    <meta charset="utf-8">
    <style>
        form {
            border: 3px solid #8E9CB2;
            width: 500px;
            height: 200px;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: blue;
        }

        label {
            width: 150px;
            padding-right: 40px;
            float: left;
            margin-bottom: 10px;
        }

        input[type=text] {
            width: 300px;
            float: left;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
<form method="post">
    <h2> Future Value Calculator</h2>
    <div>
        <label>Investment Amount:</label>
        <input type="text" name="amount" value="<?php echo $_POST["amount"] ?>"> <br>
        <label>Yearly Interest Rate: </label>
        <input type="text" name="rate" value="<?php echo $_POST["rate"] ?>"><br>
        <label>Number of Years: </label>
        <input type="text" name="year" value="<?php echo $_POST["year"] ?>"><br>
    </div>
    <input type="submit" value="Calculate">
</form>

<?php
$amount = $_POST["amount"];
$rate = $_POST["rate"];
$year = $_POST["year"];

$result = $amount + ($amount * ($rate * $year / 100));
echo "tổng giá trị sau " . $year . " năm là: " . $result;
?>
</body>
</html>
