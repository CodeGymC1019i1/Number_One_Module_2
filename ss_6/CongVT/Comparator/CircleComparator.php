 <?php
include "Comparator.php";
include "Circletest.php";

class CircleComparator extends Comparator
{
    function compare($circle1, $circle2)
    {
        // TODO: Implement compare() method.
        $radiusOne = $circle1->getRadius();
        $radiusTwo = $circle2->getRadius();

        if($radiusOne>$radiusTwo){
            return 1;
        } elseif ($radiusOne<$radiusTwo){
            return -1;
        } else return 0;
    }
}