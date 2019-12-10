<?php
include_once(dirname(__FILE__) . '/../Abstract Class/Fruit.php');

class Orange extends Fruit
{

    public function howToEat()
    {
        return "Orange could be juiced";
    }
}