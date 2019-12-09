<?php

class Rectangle implements Resizeable
{
    public $name;
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percent)
    {
        $this->width += $this->width * $percent / 100;
        $this->height += $this->height * $percent / 100;
    }
}