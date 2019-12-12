<?php
include_once "Node.php";
include_once "Queue.php";




$queue = new Queue();
$queue->isEmpty();

$queue->enqueue("ha");
var_dump($queue);
echo "<br>";
$queue->enqueue("1");
echo "<br>";
$queue->enqueue("2");
echo "<br>";
$queue->enqueue("10");
echo "<br>";
$queue->dequeue();
echo $queue;