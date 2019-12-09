<?php

class Square implements Colorable
{
    public $name;
    public $width;

    public function __construct($name, $width)
    {
        $this->name = $name;
        $this->width = $width;
    }

    public function getArea()
    {
        return pow($this->width,2);
    }

    public function howToColor()
    {
       echo "Color all four sides";
    }
}