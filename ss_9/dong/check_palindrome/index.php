<?php
include_once "Stack.php";
include_once "Queue.php";
include_once "Node.php";

$stack = new Stack(100);
$queue = new Queue();
$str = "Hello l olleH";

$chars = str_split($str, 1);
foreach ($chars as $char){
    $queue->enqueue($char);
    $stack->push($char);
}

if ($queue->dequeue() != $stack->top()){
    echo $str." khong phai chuoi doi xung" ;
}else{
    echo $str. " la chuoi doi xung";
}


