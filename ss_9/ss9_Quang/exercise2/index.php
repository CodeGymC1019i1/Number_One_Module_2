<?php
include_once "Queue.php";

$queue = new Queue();
$queue->enqueue("Statr");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("End");
var_dump($queue);
while($queue->isEmptyQueue()){
    echo $queue->dequeue()."\n";
}
