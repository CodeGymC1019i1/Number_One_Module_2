<?php

include_once "Circle.php";
include_once "Comparable.php";
class ComparableCircleRadius extends CircleRadius implements Comparable
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if ($this->getRadius()>$circleOtherRadius){
            return 1;
        }elseif ($this->getRadius()<$circleOtherRadius){
            return -1;
        }else{
            return 0;
        }
    }
}