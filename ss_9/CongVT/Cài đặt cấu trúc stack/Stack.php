<?php


class Stack
{
    private $stack;
    private $limit;

    public function __construct( $limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    //push an item to stack
    public function push($item)
    {
        if ($this->isFull()) {
            echo "Stack Full!";
        } else {
            array_unshift($this->stack, $item);
        }
    }

    //take an item from stack

    public function isFull()
    {
        return count($this->stack) == $this->limit;
    }

    //check if stack is full or not:

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty!";
        } else {
            echo array_shift($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    // return top item

    public function top()
    {
        return $this->stack[0];
    }
}


$stack = new Stack( 10);
$stack->push(5);
$stack->push(6);
$stack->push(7);
$stack->push(8);
$stack->push(3);
$stack->pop();
echo "<br>";
$stack->pop();
echo "<br>";
$stack->pop();
echo "<br>";
$stack->push("Is this empty?");

var_dump($stack->isEmpty());
echo "<br>";
$stack->pop();


