<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            border: 1px solid;
        }
    </style>
</head>
<body>
<table>
    <caption><h2>Ứng dụng Calculator</h2></caption>
    <form method="post">
        <tr>
            <td>First Operand:</td>
            <td><input type="number" name="number1"></td>
        </tr>
        <tr>
            <td>Operator:</td>
            <td><select name="calculator">
                    <option value="Sum">Sum</option>
                    <option value="Div" selected="selected">Div</option>
                    <option value="Minus">Minus</option>
                    <option value="Multiply">Multiply</option>
                </select><br>
            </td>
        </tr>
        <tr>
            <td>Second Operand:</td>
            <td><input type="number" name="number2"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button>Calculator</button>
            </td>
        </tr>
    </form>
</table>
<?php
include_once 'classCalculator.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $check = $_POST['calculator'];
    $calculator = new classCalculator($number1, $number2);
    switch ($check) {
        case "Sum":
            $display = $calculator->sum();
            $h = "+";
            break;
        case "Div":
            if($number2>0) {
                $display = $calculator->div();
                $h = "/";
                break;
            }else{
                echo "Nhập lại Second Operand";
                break;
            }

        case "Minus":
            $display = $calculator->minus();
            $h = "-";
            break;
        case "Multiply":
            $display = $calculator->multiply();
            $h = "*";
            break;
    }
    echo "<h2>Result:</h2>" . $number1 . ' ' . $h . ' ' . $number2 . ' = ' . $display;
}
?>
</body>
</html>