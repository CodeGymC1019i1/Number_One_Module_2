<?php
include_once "Patient.php";

class Queue
{
    public $front = null;
    public $back = null;

    public function enqueue($name)
    {
        $oldBack = $this->back;
        $this->back = new Patient();
        $this->back->name = $name;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->code = $this->back;
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
        $entry = 0;
        for ($i = 0; $i < count($this); $i++) {
            if ($this[$i]->code < $this[$entry]->code) {
                $entry = $i;
            }
        }
        return array_splice($this, $entry);
    }
}





