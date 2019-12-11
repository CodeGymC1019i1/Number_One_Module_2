<?php
include_once(dirname( __FILE__ ) . '/../AbstractClass/Animal.php');

class Chiken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chiken: cluck-cluck!";
    }
    public function howToEat()
    {
        return "could be fried";
    }
}