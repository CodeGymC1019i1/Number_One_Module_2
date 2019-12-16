<?php

const NUMBER_NODE = 0;
class MyLinkedList
{
    public $objNode;
    public $list=[];
    public $numberNode = NUMBER_NODE;

    public function __construct($objNode)
    {
        $this->objNode = $objNode;
    }
    public function size(){
        return count($this->list);
    }

    public function add($index,$objNode){
        if(is_integer($index)&&$index<$this->size()){
            $list1=array_slice($this->list,0,$index-1);
            array_push($list1,$objNode);
            $list2=array_slice($this->list,$index,$this->size()-1);
            $this->list=array_merge($list1,$list2);
        }
        return $this->list;
    }

    public function addFirst($objNode){
        array_unshift($this->list,$objNode);
        return $this->list;
    }

    public function addLast($objNode){
        array_push($this->list,$objNode);
    }

    public function remove($index){
        array_splice($this->list,$index,1);
        return $this->list;
    }

    public function removeObj($objNode){
        for($i=0;$i<$this->size();$i++){
            if($this->list[$i]==$objNode){
                array_splice($this->list,$i,1);
            }
        }
        return $this->list;
    }

    public function get($index){
        return $this->list[$index];
    }

    public function printList(){

    }

    public function __clone()
    {
        return $this->list;
    }

    public function contains(){

    }

    public function indexOf(){

    }
}