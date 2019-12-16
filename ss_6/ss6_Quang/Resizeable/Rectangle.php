<?php


class Rectangle implements Resizeable
{
    public $name;
    public $width;
    public $height;

    public function __construct($name,$width,$height)
    {
        $this->width=$width;
        $this->height=$height;
        $this->name=$name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function resize($percent)
    {
        $this->width+=$this->width*$percent/100;
        $this->height+=$this->height*$percent/100;
        return $this->width*$this->height;
    }
}