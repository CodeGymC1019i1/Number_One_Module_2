<?php

class Circle
{
    public $name;
    public $radius;

    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function getArea()
    {
        return M_PI * 2 * $this->radius;
    }
}