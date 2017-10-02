<?php
$a = 1;
$b = 2;

//if(a != $b && $a ==2 || $a==3) {
//    echo "blabla";
//}
//exemple 1
if ($a > $b) {
    echo "$a > $b";
} elseif ($a < $b) {
    echo "$a < $b";
} else {
    echo "$a == $b";
}

echo "\n";

//switch
$pays = "jamaique";
switch ($pays) {
    case "cuba";
        echo "La Havane";
        break;
    case "Jamaique";
        echo "Kingstown";
        break;
    default :
        echo "Antananarivo";
        break;        
}
  
echo "\n";
//for traditionnel
 // $tab = [];
$tab = array();
for ($i=0 ; $i<10 ; $i++) {
    $tab[] = $i * 10;
}
printf("Tab : %s\n", implode(",",$tab));

//for americain
foreach ($tab as $valAct) {
    printf("\n",$valAct);
} 

//while précondition
echo "\n";
$a=0;
while($a<10) {
    $a++;
}

//do while postcondition
$a=0;
do{$a++;}

while ($a<10)  ;
