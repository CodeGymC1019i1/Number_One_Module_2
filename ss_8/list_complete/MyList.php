<?php

class MyList
{
    public $size = 0;
    public $list = [];

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function getList()
    {
        return $this->list;
    }

    public function add($obj)
    {
        array_push($this->list, $obj);
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return count($this->list);
    }

    public function remove($index)
    {
        for ($i = 0; $i < $this->getSize(); $i++) {
            if ($i == $index) {
                array_splice($this->list, $index, 1);
            }
        }
        return $this->list;
    }

    public function checkContains($obj)
    {
        for ($i = 1; $i < $this->getSize(); $i++) {
            if ($this->list[$i] == $obj) {
                return true;
            }
        }
        return false;
    }

    public function indexOf($obj)
    {
        for ($i = 0; $i < $this->getSize(); $i++) {
            if ($this->list[$i] == $obj) {
                return "<br>".$i;
            }
        }
        die("<br>" . $obj . " no exist in list ");
    }

    public function get($index)
    {
        if (is_Integer($index) && $index < $this->size) {
            return "<br>".$this->list[$index] . "<br>";
        } else {
            die("ERROR in ArrayList.get");
        }
    }


    public function clear()
    {
        $this->list = [];
    }
}