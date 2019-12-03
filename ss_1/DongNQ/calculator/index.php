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
<h2>Simple Calculator</h2>
<form method="post">
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First operand:</td>
                <td><input type="text" name="firstOperand" value="<?php echo $_POST["firstOperand"]; ?>"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="operator">
                        <option value="add">+</option>
                        <option value="multi">*</option>
                        <option value="div">/</option>
                        <option value="sub">-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="text" name="secondOperand" value="<?php echo $_POST["secondOperand"]; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
$firstOperand = $_POST["firstOperand"];
$operator = $_POST["operator"];
$secondOperand = $_POST["secondOperand"];

switch ($operator) {
    case "add":
        $result = $firstOperand + $secondOperand;
        break;
    case "multi":
        $result = $firstOperand * $secondOperand;
        break;
    case "div":
        if ($secondOperand == 0) {
            $result = "không thể thực hiện phép chia với mẫu số bằng 0";
        } else {
            $result = $firstOperand / $secondOperand;
        }
        break;
    case "sub":
        $result = $firstOperand - $secondOperand;
        break;
}

echo "<h2>Result: </h2>".$result;
?>
</body>
</html>