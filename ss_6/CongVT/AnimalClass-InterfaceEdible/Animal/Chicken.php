<?php
include_once(dirname(__FILE__) . '/../Abstract class/Animal.php');
include_once(dirname(__FILE__) . '/../Interface/Edible.php');


class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        return "Chicken: Cluck cluck cluck";
    }


    public function howToEat()
    {
        // TODO: Implement howToEat() method.
        return "Chicken could be fried";
    }
}