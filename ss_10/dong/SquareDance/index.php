<?php

include_once "Dancer.php";

$queue_male = new SplQueue();
$queue_female = new SplQueue();

$dancer1 = new Dancer('Jacks', "male");
$dancer2 = new Dancer('James', "male");
$dancer3 = new Dancer('Davids', "male");
$dancer4 = new Dancer('Michael', "male");


$dancer5 = new Dancer('Takizawa Laura', "female");
$dancer6 = new Dancer('Adele', "female");
$dancer7 = new Dancer('Hanna', "female");
$dancer8 = new Dancer('Sora Aoi', "female");
$dancer9 = new Dancer('Hinata', "female");
$dancer10 = new Dancer('Suzika', "female");

$queue_male->enqueue($dancer1);
$queue_male->enqueue($dancer2);
$queue_male->enqueue($dancer3);
$queue_male->enqueue($dancer4);

$queue_female->enqueue($dancer5);
$queue_female->enqueue($dancer6);
$queue_female->enqueue($dancer7);

while (!$queue_male->isEmpty() && !$queue_female->isEmpty()) {
    echo $queue_male->dequeue()->name . " couple with ". $queue_female->dequeue()->name."<br>";
}
if ($queue_female->isEmpty() || $queue_male->isEmpty()){
    echo "queue is not dancer. Please Wait in 3 minutes <br>";
}
$queue_female->enqueue($dancer8);
$queue_female->enqueue($dancer9);
$queue_female->enqueue($dancer10);

while (!$queue_male->isEmpty() && !$queue_female->isEmpty()) {
    echo $queue_male->dequeue()->name . " couple with ". $queue_female->dequeue()->name."<br>";
}
if ($queue_female->isEmpty() || $queue_male->isEmpty()){
    echo "queue is not dancer. Please Wait in 3 minutes <br>";
}

echo "Number Dancer waitting is ";
if ($queue_male->isEmpty()){
    echo $queue_female->count();
}if ($queue_female->isEmpty()){
    echo $queue_male->count();
}
