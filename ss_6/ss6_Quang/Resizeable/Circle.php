<?php

include_once "Resizeable.php";
class Circle implements Resizeable
{
    public $name;
    public $radius;

    public function __construct($name,$radius)
    {
        $this->name=$name;
        $this->radius=$radius;
    }

    public function getName(){
        return $this->name;
    }
    public function resize($percent)
    {
        $this->radius+= $this->radius*$percent/100;
        return $this->radius*pi()*2;
    }

}