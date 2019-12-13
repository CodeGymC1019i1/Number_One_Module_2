<?php
class ArrayList
{
    public $arrayList;

    public function __construct($arr = "") 
    {   
        if(is_array($arr)){
            $this->arrayList = $arr;
        }else{
            $this->arrayList = [];
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj); 
    }

    public function size()
    {
        return count($this->arrayList);
    }

    // public function isInteger($toCheck)
    // {
    //     return preg_match("/^[0-9]+$/", $toCheck);
    // }

    public function get($index)
    {
        if(is_Integer($index) && $index < $this->size()){
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
}