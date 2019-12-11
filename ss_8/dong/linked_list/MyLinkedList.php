<?php

include_once "Node.php";

class MyLinkedList
{
    public $firstNode;
    public $lastNode;
    public $numNodes;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->numNodes = 0;

    }

    public function add($index, $data)
    {
        if ($index == 0){
            $this->firstNode($data);
        }else{

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

    }

}