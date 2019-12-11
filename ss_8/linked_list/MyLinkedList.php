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

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        $this->numNodes++;
    }

    public function addLast($data)
    {
        $this->lastNode = new Node($data);
        $this->lastNode->next = NULL;
        $this->numNodes++;
    }

    public function remove($index)
    {
        
    }

}