<?php
# Variables
$a = 10;
$b = 5;

echo $a <=> $b;

echo "\n";
#----------------------------------
/*
Mensaje en consola/navegador:
1
*/

# Variables:
$a =null;
$b = 40;
$c = 18;

echo $z ?? $a ?? $b ?? $c;

echo "\n";
#----------------------------------
/*
Mensaje en consola/navegador:
40
*/
