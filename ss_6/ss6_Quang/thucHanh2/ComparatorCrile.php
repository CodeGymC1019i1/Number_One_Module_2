<?php

include_once "Cricle.php";
include_once "Comparator.php";
class ComparatorCrile extends Circle implements Comparable
{
    public function __construct($radius, $color)
    {
        parent::__construct($radius, $color);
    }

    public function compareTo($circleTwo)
    {
        $circleTwoRadius = $circleTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        }  else if($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}