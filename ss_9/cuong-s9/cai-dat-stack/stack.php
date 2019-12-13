<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit) {
        $this->stack = [];
        $this->limit = $limit;

    }
    public function push($item)
    {
        if(count($this->stack) < $this->limit) {
        array_unshift($this->stack, $item);
        } else {
            echo "Stack full";
        }
    }
    public function pop()
    {
        if($this->isEmpty()){
            echo "mang rong";
        } else {
        array_shift($this->stack);
        return $this->stack;
        }
    }
    public function top(Type $var = null)
    {
        return current($this->stack);
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
}

