<?php

include_once "Circle.php";

class Cylinder extends Circle
{
    private $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString()
    {
        return parent::__toString(). ", this height = ".$this->height.", this Volume = ".$this->calculateVolume();
    }
}