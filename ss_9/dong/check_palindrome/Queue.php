<?php


class Queue
{
    public $front;
    public $back;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
    }

    public function isEmpty()
    {
        if (empty($this->front)) {
            return true;
        }
        return false;
    }

    public function enqueue($value)
    {
        $back = $this->back;
        $this->back = new Node($value);
        if ($this->isEmpty()){
            $this->front = $this->back;
        }else{
            $back->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()){
            return null;
        }
        $removeValue = $this->front->value;
        $this->front = $this->front->next;

        return $removeValue;
    }

}