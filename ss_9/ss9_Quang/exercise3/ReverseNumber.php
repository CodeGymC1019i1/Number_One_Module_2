<?php


class ReverseNumber
{
    public $size;
    public $arrStack;

    public function __construct($size)
    {
        $this->size = $size;
        $this->arrStack = [];
    }

    public function push()
    {
        for ($i = 0; $i < $this->size; $i++) {
            array_unshift($this->arrStack, $i);
        }
        return $this->arrStack;
    }


    public function pop()
    {
        $arrNewStack=[];
        for ($i = 0; $i < $this->size; $i++) {
           $item=array_shift($this->arrStack);
           array_unshift($arrNewStack,$item);
        }
        return $arrNewStack;
    }
}