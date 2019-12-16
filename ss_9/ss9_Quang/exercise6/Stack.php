<?php


class Stack
{
    public $arrStack;
    public $limit;

    public function __construct($limit)
    {
        $this->arrStack=[];
        $this->limit=$limit;
    }

    public function push($size){
        if(count($this->arrStack)<$this->limit){
            for($i=0;$i<$size;$i++){
                array_unshift($this->arrStack,$i);
            }
        }else{
            echo "Stack full!!";
        }
    }


}