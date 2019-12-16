<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack=[];
        $this->limit=$limit;
    }

    public function push($index){
        if($this->size()<$this->limit){
            array_unshift($this->stack,$index);
        }else {
            echo "Stack full";
        }
    }

    public function pop(){
        return array_shift($this->stack);
    }

    public function top(){
        return current($this->stack);
    }

    public function isEmptyStack(){
        return empty($this->stack);
    }

    public function size(){
        return count($this->stack);
    }

}