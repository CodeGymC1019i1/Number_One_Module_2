<?php
include_once "Node.php";

class Queue
{
    public $font;
    public $back;

    public function isEmptyQueue(){
        return $this->font=null;
    }

    public function enqueue($value){
        $oldBack=$this->back;
        $this->back=new Node();
        $this->back->value=$value;
        if($this->isEmptyQueue()){
            $this->font=$this->back;
        }else{
            $oldBack->next=$this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmptyQueue()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }

}