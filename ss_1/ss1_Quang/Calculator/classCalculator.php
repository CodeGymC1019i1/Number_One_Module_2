<?php


class classCalculator
{
    private $number1;
    private $number2;

    public function __construct($number1, $number2)
    {
        $this->number2 = $number2;
        $this->number1 = $number1;
    }

    public function sum()
    {
        return $this->number1 + $this->number2;
    }

    public function div(){
        return $this->number1/$this->number2;
    }

    public function minus(){
        return $this->number1-$this->number2;
    }

    public function multiply(){
        return $this->number1/$this->number2;
    }
}
?>