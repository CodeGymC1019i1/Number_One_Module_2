<?php

include_once "Node.php";
const DEFAULT_CAPACITY = 10;
class MyLinkedList
{
    public $firstNode;
    public $lastNode;
    public $numNodes;
    public $capacity;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->numNodes = 0;
        $this->capacity = DEFAULT_CAPACITY;

    }

    public function add($index, $data)
    {
        if ($index == 0) {
            $this->addFirst($data);
        } else {
            $link = new Node($data);
            $currentNode = $this->firstNode;
            $previousNode = $this->firstNode;
            for ($i = 0 ; $i<$index; $i++) {
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
            }
            $link->next = $currentNode;
            $previousNode->next = $link;
            $this->numNodes++;
        }
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == NULL) {
            $this->lastNode = $link;
        }
        $this->numNodes++;
    }

    public function addLast($data)
    {
        if ($this->firstNode !== NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->numNodes++;
        } else {
            $this->addFirst($data);
        }
    }

    public function remove($index)
    {
        $currentNode = $this->firstNode;
        $previousNode = $this->firstNode;

        while ($currentNode->data != key){
            if ($currentNode->next == NULL){
                return NULL;
            } else {
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
            }
        }

        if ($currentNode == $this->firstNode){
            if ($this->numNodes == 1){
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        }else{
            if ($this->numNodes == 1){
                $this->lastNode = $previousNode;
            }
            $previousNode->next = $currentNode->next;
        }
        $this->numNodes--;
    }

    public function size(){
        return $this->numNodes;
    }

    public function get($index){
        $currentNode = $this->firstNode;
        for ($i =0; $i<$this->size(); $i++){
            $currentNode = $currentNode->next;
            if ($i == $index){
                $currentNode->getData();
            }
        }
    }

    public function ensureCapacity($minCapacity){
        if ($this->size() > $this->capacity ){
            $this->capacity += DEFAULT_CAPACITY;
        }
    }

}