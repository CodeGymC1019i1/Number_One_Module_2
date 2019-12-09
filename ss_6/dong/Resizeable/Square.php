<?php

class Square implements Resizeable
{
    public $name;
    public $width;

    public function __construct($name, $width)
    {
        $this->name = $name;
        $this->width = $width;
    }

    public function resize($percent)
    {
        $this->width += $this->width * $percent / 100;
    }
}