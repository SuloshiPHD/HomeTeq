<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
$y = 5985;
var_dump($y);
echo "<br>";
$z= 5985.67;
var_dump($z);
echo "<br>";
$a=false;
var_dump($a);
?> 

