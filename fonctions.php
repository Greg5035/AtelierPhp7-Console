<?php
function sommeTypee(int $a , int $b):string {
    return "coucou : " . strval($a + $b) ;
}      

function somme( $a , $b) {
    return "coucou : " . strval($a + $b) ;
}      

echo sommeTypee(1,2);

function multiplieElementPar2(array &$tab) {
    for($i=0;$i<count($tab);$i++){
       $tab[$i] =$tab[$i] *2;
    }
}
        
echo "\n";
$tab = [1,2,3,4,5];
multiplieElementPar2($tab);
printf("%s\n" , implode("," , $tab));

/**
 * Calcule la factorielle du paramètre $,.
 * $param int $n. Le nombre dont on calculela factorielle
 * $return int la factorielle
 
 */
function factorielle(int $n):int {
    if ($n<=0) {
        return 1;
    }
    return $n * factorielle($n-1);
}

echo factorielle(3);

