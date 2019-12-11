<?php

include_once 'AbstractClass/Animals/Chiken.php';
include_once 'AbstractClass/Animals/Tiger.php';

$tiger = new Tiger();
echo $tiger->makeSound();
$chiken = new Chiken();
echo $chiken->makeSound();


// echo ('---- Animals
// ');
// $animals[0] = new Tiger();
// $animals[1] = new Chicken();
       if ($chicken instanceof Chicken) {
           echo $chicken->howToEat(). ' ';
       }