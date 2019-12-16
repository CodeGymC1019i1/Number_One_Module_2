<?php


class LowToBinary
{
    public $stack;
    public $number;

    public function __construct($number)
    {
        $this->number = $number;
        $this->stack = [];
    }

    public function push()
    {
        while ($this->number>= 1) {
            array_unshift($this->stack, $this->number % 2);
            $this->number = floor($this->number / 2);
        }
        return $this->stack;
    }

    public function pop(){
        
    }
}