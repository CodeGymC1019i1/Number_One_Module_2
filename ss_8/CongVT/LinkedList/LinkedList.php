<?php
include "ListNode.php";

class LinkedList
{
    private $_firstNode = NULL;
    private $_totalNode;

    public function insert(string $data = NULL)
    {
        $newNode = new ListNode($data);

        if ($this->_firstNode === NULL) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNode++;
        return TRUE;
    }

    public function display()
    {
        echo "Total book titles: " . $this->_totalNode . "\n<br>";
        $currentNode = $this->_firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "\n<br>";
            $currentNode = $currentNode->next;
        }
    }
}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();