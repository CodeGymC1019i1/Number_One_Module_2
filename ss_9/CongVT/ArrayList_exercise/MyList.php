<?php
CONST DEFAULT_CAPACITY = 10;

class MyList
{
    private $size = 0;
    private $arrayObject;

    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayObject = $arr;
        else
            $this->arrayObject = array();
    }
    //Add a obj to array
    public function addObj($obj){
        array_push($this->arrayObject, $obj);
    }
    //Clear ArrayList
    public function clear(){
        $this->arrayObject = array();
    }
    //return size of ArrayList
    public function size()
    {
        return count($this->arrayObject);
    }
    //return an object with index
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayObject[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    //remove an object with index
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayObject = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayObject[] = $this->get($i);
            $this->arrayObject = $newArrayObject;
        } else {
            die("ERROR in ArrayObject.remove <br> Integer value required");
        }
    }
    //check $index is an integer or not
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}