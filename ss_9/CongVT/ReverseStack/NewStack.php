<?php


class NewStack
{
    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    public function pop()
    {
        return array_shift($this->stack);
    }

    //return length of stack
    public function size()
    {
        return count($this->stack);
    }

    public function __toString()
    {
        return strval($this);
    }
}
