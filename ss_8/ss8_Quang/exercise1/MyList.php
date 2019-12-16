<?php

const DEFAULT_CAPACITY = 10;
class MyList
{
    public $size = 0;
    public $listArr = [];
    public $capacity;

    public function __construct($size)
    {
        $this->size = $size;
        $this->capacity = DEFAULT_CAPACITY;
    }

    public function size()
    {
        return count($this->listArr);
    }

//    public function cupArray($arr){
//
//    }

    public function ensureCapacity($minCapacity)
    {
        $this->capacity += $minCapacity;
    }

    public function add($obj, $index = null)
    {
        if ($index == null) {
            array_push($this->listArr, $obj);
        } else {
            if ($this->size < $this->capacity) {
                $listArr1 = array_slice($this->listArr, 0, $index - 1);
                array_push($listArr1, $obj);
                $listArr2 = array_slice($this->listArr, $index, $this->size() - 1);
                array_merge($listArr1, $listArr2);
            } else {
                $this->ensureCapacity(DEFAULT_CAPACITY);
                $listArr1 = array_slice($this->listArr, $index - 1);
                array_push($this->listArr, $obj);
                $listArr2 = array_slice($this->listArr, $index, $this->size() - 1);
                array_merge($listArr1, $listArr2);
            }
        }
        $this->size++;
        return $this->listArr;
    }

    public function remove($index)
    {
        array_splice($this->listArr, $index, 1);
        return $this->listArr;
    }

    public function __clone()
    {
        return $this->listArr;
    }

    public function get($index)
    {
        if (is_integer($index) && $index < $this->size()){
            return $this->listArr[$index];
        }else{
            return "ERROR";
        }
    }

    public function clear()
    {
        return $this->listArr = [];
    }

    public function contains($index)
    {
        for ($i = 0; $i < $this->size(); $i++) {
            if ($this->listArr[$i] == $index) {
                return $this->listArr[$i];
            }
        }
    }

    public function indexOf($obj)
    {
        for ($i = 0; $i < $this->size(); $i++) {
            if ($this->listArr[$i] == $obj) {
                return "<br>" . $i;
            }
        }
        die("<br>" . $obj . " no exist in list ");
    }
}