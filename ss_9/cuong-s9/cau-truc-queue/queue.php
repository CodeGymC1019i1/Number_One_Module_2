<?php
include_once 'element.php';

class Queue extends Element
{
    private $front;
    private $back;

    public function isEmpty()
    {
        return $this->front == null;
    }
    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        if($this->isEmpty()){
            $this->back == $this->back;
        } else{
            $oldBack->next = $this->back;
        } 
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}
