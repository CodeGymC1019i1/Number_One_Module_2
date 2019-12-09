<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height=$height;
    }

    public function caculateArea()
    {
        return parent::calculateArea()*2+parent::calculateArea()*$this->height;
    }
    public function caculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }
}