<?php
$a = 2;
$b = 1; 

function sum(){
global $a;
$a = 0;
static $b= 2;
 

$b = $a + $b;
echo "Static = ".$b."<br>";
}

sum();
sum();
sum();
echo $b;
?>