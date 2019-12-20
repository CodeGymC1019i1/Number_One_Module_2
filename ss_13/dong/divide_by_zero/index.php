<?php

class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "can't divide by zero";
    }
}

function divide($numerator, $denominator)
{
    if ($denominator == 0){
        throw new DivideByZeroException();
    }
    return $numerator/$denominator;
}

try {
    $result = divide(100, 5);
    echo $result."<br>";
    $result = divide(100, 0);
}catch (DivideByZeroException $e){
    echo "error: ".$e;
}