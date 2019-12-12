<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($element)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $element);
        }else{
            echo "<script>alert('full limit')</script>";
        }
    }

    public function pop()
    {
        return array_shift($this->stack);
    }

    public function top()
    {
        return $this->pop();
    }

    public function isEmpty()
    {
        if (empty($this->stack)) {
            return true;
        }
        return false;
    }
}