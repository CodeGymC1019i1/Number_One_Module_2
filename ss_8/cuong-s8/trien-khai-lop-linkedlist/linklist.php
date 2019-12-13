<?php

include_once "node.php";

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == null) {
            $this->lastNode = $link;
        }
        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode !== null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        }else{
            $this->insertFirst($data);
        }
    }

    public function getCount(){
        return $this->count;
    }

    public function readList(){
        $listArr=[];
        $current=$this->firstNode;
        while($current!==null){
            array_push($listArr,$current->readNode());
            $current=$current->next;
        }
        return $listArr;
    }
}