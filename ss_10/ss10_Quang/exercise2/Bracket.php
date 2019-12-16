<?php
$stack = new SplStack();
$sym ='s * (s – a) * (s – b) * (s – c) ';
for ($i = 0; $i < strlen($sym); $i++) {
    if ($sym[$i] === '(') {
        $stack->push($sym[$i]);
    }
    if ($sym[$i] === ')') {
        if($stack->isEmpty()){
            echo "lỗi";
            return;
        }else {
            $stack->pop();
        }
    }
}
if($stack->isEmpty()){
    echo "Well";
}else{
    echo "lỗi";
}