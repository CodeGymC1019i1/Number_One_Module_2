<?php

class Stack
{
    public $arr;
    public $convert;

    public function __construct($convert) {
        $this->arr = [];
        $this->convert = $convert;
    }
    public function push()
    {
        while($this->convert > 0){
            array_unshift($this->arr, $this->convert % 2);
            $this->convert = floor($this->convert/2);
        }
        return $this->arr;
    }

    public function __toString(){
        return implode($this->arr)."";
    }
}