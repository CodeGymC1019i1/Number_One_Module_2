<?php

$str = 's*(s–a)';
$bracketOpen = "(";
$bracketClose = ")";
$stack = new SplStack();
$symbols = str_split($str, 1);
for ($i = 0; $i < count($symbols); $i++) {
    if ($symbols[$i] == $bracketOpen) {
        $stack->push($bracketOpen);
    } elseif ($symbols[$i] == $bracketClose) {
        if ($stack->isEmpty()) {
            return "false ";
        } else {
            $open = $stack->pop();
            if ($symbols[$i] . $open == "()") {
                return true;
            } else {
                return false;
            }
        }
    }
    var_dump($stack->isEmpty());
}
