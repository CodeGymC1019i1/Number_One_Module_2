<?php

include('Animal/Chicken.php');
include('Animal/Tiger.php');
include('Fruit/Apple.php');
include('Fruit/Orange.php');

echo('---- Animals<br>');
$animals[0] = new Chicken();
$animals[1] = new Tiger();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . '<br>';
    }
}

echo('----Fruits<br>');
$fruits[0] = new Apple();
$fruits[1] = new Orange();
foreach ($fruits as $fruit) {
    echo $fruit->howToEat(). '<br>';
}
