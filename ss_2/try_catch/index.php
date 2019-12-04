<?php

class DivideByZeroException extends Exception
{
}

class AllIsZero extends Exception
{
}

;
function process($firstNumber, $secondNumber)
{
    try {
        if ($secondNumber == 0) {
            throw new DivideByZeroException();
        } else if ($firstNumber == 0 && $secondNumber == 0) {
            throw new AllIsZero();
        } else {
            echo $firstNumber + $secondNumber;
            echo $firstNumber / $secondNumber;
            echo $firstNumber * $secondNumber;
            echo $firstNumber - $secondNumber;
        }
    } catch (DivideByZeroException $ex) {
        echo "DIVIDE BY ZERO EXCEPTION!";
    }
    catch (AllIsZero $ex){
        echo "all number is zero";
    }
}

process(0, 0);