<?php
const DEFAULT_CAPACITY = 10;

class MyList
{
    public $size = 0;
    public $list = [];
    public $capacity;

    public function __construct($size)
    {
        $this->size = $size;
        $this->capacity = DEFAULT_CAPACITY;
    }


    public function add($obj, $index = NULL)
    {
        if ($index == NULL) {
            array_push($this->list, $obj);
        } else {
            if ($this->size < $this->capacity) {
                $list1 = array_slice($this->list, 0, $index);
                array_push($list1, $obj);
                $list2 = array_slice($this->list, $index, $this->size() - 1);
                $this->list = array_merge($list2, $list1);

            } else {
                $this->ensureCapacity(DEFAULT_CAPACITY);
                $list1 = array_slice($this->list, 0, $index);
                array_push($list1, $obj);
                $list2 = array_slice($this->list, $index, $this->size() - 1);
                $this->list = array_merge($list2, $list1);
            }
        }
        $this->size++;
        return $this->list;
    }

    /**
     * @return int
     */
    public function size()
    {
        return count($this->list);
    }

    public function remove($index)
    {
        array_splice($this->list, $index, 1);
        return $this->list;
    }

    public function ensureCapacity($minCapacity)
    {
        $this->capacity += $minCapacity;
    }

    public function contains($obj)
    {
        for ($i = 1; $i < $this->size(); $i++) {
            if ($this->list[$i] == $obj) {
                return true;
            }
        }
        return false;
    }

    public function indexOf($obj)
    {
        for ($i = 0; $i < $this->size(); $i++) {
            if ($this->list[$i] == $obj) {
                return "<br>" . $i;
            }
        }
        die("<br>" . $obj . " no exist in list ");
    }

    public function __clone()
    {
        return $this->list;
    }

    public function get($index)
    {
        if (is_Integer($index) && $index < $this->size) {
            return "<br>" . $this->list[$index] . "<br>";
        } else {
            die("ERROR in ArrayList.get");
        }
    }


    public function clear()
    {
        $this->list = [];
    }
}