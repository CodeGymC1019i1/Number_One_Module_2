<?php
//include_once "Node.php";

class Node
{
    public $value;
    public $next;
}

class Queue
{
    public $front = null;
    public $back = null;

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front;
        $this->front = $this->front->next;
        return $removedValue->value;
    }
}

$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("End");
while (!$queue->isEmpty()) {
    echo $queue->dequeue()."<br>";
}