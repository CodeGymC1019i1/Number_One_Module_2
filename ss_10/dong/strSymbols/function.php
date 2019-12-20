<?php


function checkSymbol($str)
{
    $bracketOpen = "(";
    $bracketClose = ")";
    $stack = new SplStack();
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $bracketOpen) {
            $stack->push($str[$i]);
        } elseif ($str[$i] == $bracketClose) {
            if ($stack->isEmpty()) {
                return "false ";
            } else {
                $open = $stack->pop();
            }
        }
    }
    if ($stack->isEmpty()) {
        echo "true";
    } else {
        echo "false";
    }
}