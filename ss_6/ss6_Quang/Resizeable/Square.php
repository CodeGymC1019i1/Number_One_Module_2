<?php


class Square implements Resizeable
{
    public $name;
    public $width;

    public function __construct($name,$width)
    {
        $this->name=$name;
        $this->width=$width;
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
        $acreage=pow($this->width,2);
        return $acreage+=$acreage*$percent/100;
    }
}