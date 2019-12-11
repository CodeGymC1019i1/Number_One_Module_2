<?php


class ArrayList
{
    public $arrayList;

    public function __construct($arr = " ")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}