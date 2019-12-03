<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest(); echo "<br>";
myTest(); echo "<br>";
myTest(); echo "<br>";


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
