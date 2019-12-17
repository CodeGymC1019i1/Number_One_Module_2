<?php
include_once "ReadingList.php";
$myBooks = new ReadingList();

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');

echo $myBooks->pop()."<br>"; // outputs 'A Game of Thrones'
echo $myBooks->pop()."<br>"; // outputs 'A Clash of Kings'
echo $myBooks->pop()."<br>"; // outputs 'A Storm of Swords'

echo $myBooks->top()."<br>"; // outputs 'A Feast for Crows'

echo $myBooks->pop()."<br>"; // outputs 'A Feast for Crows'

$myBooks->push('The Armageddon Rag');
echo $myBooks->pop()."<br>"; // outputs 'The Armageddon Rag'
