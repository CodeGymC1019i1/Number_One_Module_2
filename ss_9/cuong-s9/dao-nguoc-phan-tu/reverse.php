<?php
class Reverse
{
    public $molecule;
    public $arr;
    public function __construct($molecule) {
        $this->molecule = $molecule;
        $this->arr = [];
    }
    public function push()
    {
        while ($i < $this->molecule) {
            array_unshift($this->arr, $i);
            $i++;
        }
        return $this->arr;
    }

    public function pop()
    {
        $arr2 = [];
        while ($i < $this->molecule) {
            array_unshift($arr2, array_shift($this->arr));
            $i++;
        }     
        return $arr2;
    }
}