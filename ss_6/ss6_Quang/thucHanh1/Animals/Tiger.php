<?php

include_once "../AbstractClass/Animal.php";
include_once "../InterfaceClass/Edible.php";
class Tiger extends Animal
{

    public function makeSound()
    {
        return "Tiger:  roarrrrr!";
    }

}