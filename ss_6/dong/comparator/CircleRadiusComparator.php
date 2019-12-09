<?php
include "CircleRadius.php";
include "Comparator.php";

class CircleRadiusComparator extends CircleRadius implements Comparator
{
    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }

    public function compareTo($circle2)
    {
        $radiusTwo = $circle2->getRadius();

        if ($this->getRadius() > $radiusTwo){
            return 1;
        }elseif ($this->getRadius() < $radiusTwo){
            return -1;
        }else{
            return 0;
        }
    }
}