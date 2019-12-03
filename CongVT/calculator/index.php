<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<div style="padding: 10px; width: 320px; height: 300px; border: 1px solid darkred">
    <h1>Simple Calculator</h1>
    <form action="" method="post"
          style="border: 1px solid darkblue; width: 300px; height: 100px; padding: 5px 5px 5px 5px">
        <label>First Operand:</label>
        <input type="text" name="firstNum">
        <br>
        <label>Operator:</label>
        <select name="operation" id="">
            <option value="sum">Summation</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <br>
        <label>Second Operand:</label>
        <input type="text" name="secondNum">
        <br>
        <label for="">&nbsp;</label>
        <input type="submit" value="Calculate">
    </form>
    <h1>Result:<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            class DivideByZeroException extends Exception
            {
            }

            class calculator
            {
                private $firstNum, $secondNum;

                public function __construct($fVal, $sVal)
                {
                    $this->firstNum = $fVal;
                    $this->secondNum = $sVal;
                }

                public function sum()
                {
                    return $this->firstNum + $this->secondNum;
                }

                public function sub()
                {
                    return $this->firstNum - $this->secondNum;
                }

                public function mul()
                {
                    return $this->firstNum * $this->secondNum;
                }

                public function div()
                {
                    return $this->firstNum / $this->secondNum;
                }
            }

            $fNum = $_POST['firstNum'];
            $sNum = $_POST['secondNum'];
            $result = new calculator($fNum, $sNum);
            switch ($_POST['operation']) {
                case 'sum':
                    echo "$fNum + $sNum = " . $result->sum();
                    break;
                case 'sub':
                    echo "$fNum - $sNum = " . $result->sub();
                    break;
                case 'mul':
                    echo "$fNum * $sNum = " . $result->mul();
                    break;
                case 'div':
                    try {
                        if ($sNum == 0) {
                            throw new DivideByZeroException();
                        } else  echo "$fNum / $sNum = " . $result->div();
                    } catch(Exception $e) {
                        echo "Divided by zero";
                    }
                    break;
            }
        }
        ?></h1>
</div>
<!--//if ($_SERVER['REQUEST_METHOD'] == 'POST') {-->
<!--//    $firstNum = $_POST['firstNum'];-->
<!--//    $secondNum = $_POST['secondNum'];-->
<!--//    $result = "";-->
<!--//    switch ($_POST['operation']) {-->
<!--//        case 'sum':-->
<!--//            $result = " $firstNum + $secondNum = " . ($firstNum + $secondNum);-->
<!--//            break;-->
<!--//        case 'sub':-->
<!--//            $result = " $firstNum - $secondNum = " . $firstNum - $secondNum;-->
<!--//            break;-->
<!--//        case 'mul':-->
<!--//            $result = " $firstNum * $secondNum = " . $firstNum * $secondNum;-->
<!--//            break;-->
<!--//        case 'div':-->
<!--//            try {-->
<!--//                if ($secondNum == 0) {-->
<!--//                    throw new DivisionByZeroError();-->
<!--//                } else {-->
<!--//                    $result = " $firstNum / $secondNum = " . $firstNum / $secondNum;-->
<!--//                }-->
<!--//            } catch (DivisionByZeroError $ex) {-->
<!--//                $result = "Divide by zero";-->
<!--//            }-->
<!--//            break;-->
<!--//    }-->
<!--//    echo $result;-->
<!--} ?>-->

</body>
</html>


