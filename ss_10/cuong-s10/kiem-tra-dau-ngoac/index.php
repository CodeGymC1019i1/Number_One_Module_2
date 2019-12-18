<?php
$stack = new SplStack();
$sym = 's * (s – a) * (s – b) * (s – c) ';

while ($i < strlen($sym)) {
        if($sym === '('){
        $stack->push($sym[$i]);
        }

        if($sym === ')'){
            if($stack->isEmpty()){
            echo 'loi';
            return;
            } else {
            $stack->pop();
            }
        }
    $i++;
}

if($stack->isEmpty()){
    echo 'Well';
} else{
    echo 'loi';
}
