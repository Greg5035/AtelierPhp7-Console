<?php

$a = array();
$a[] = 1 ;
$a[] = 2;
$a[] = 3;
$a[] = 4;
$a[] = 4;
$a[] = 5;


$b = array();
$b[] = 3;
$b[] = 4;
$b[] = 4;
$b[] = 5;
$b[] = 6;
$b[] = 7;
$b[] = 7;

echo implode(",",$a);
echo "\n";
echo explode("," , "a,b,c");
echo "\n";
foreach (explode("," , "a,b,c") as $nomVar) {
    echo $nomVar . "\n";
}
foreach ($a as $nomVar) {
    echo $nomVar . "\n";
}    
echo "\n";
echo implode(array_intersect($a,$b) , ",");
echo "\n";
echo implode(array_merge($a,$b) , ",");
echo "\n";
echo implode(array_diff($b,$a) , ",");

