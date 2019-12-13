<?php
include_once 'node.php';

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
    
    public function insertFirst($data){
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == NULL){
            $this->lastNode = $link;
        }
        $this->count++; 
}
    
        
    public function insertLast($data)
    {
            if($this->firstNode !== NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        }else {
        $this->insertFirst($data);
    }
    }
    public function getCount()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;
        while($current !== NULL){
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}