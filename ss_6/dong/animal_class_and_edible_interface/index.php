<?php
include "Animals/Chicken.php";
include "Animals/Tiger.php";
include "Fruits/Orange.php";
include "Fruits/Apple.php";

echo("animals<br>");
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . "<br>";
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . ' ';
    }
}

echo("fruits <br>");
$fruits[0] = new Orange();
$fruits[1] = new Apple();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . "<br>";
}
