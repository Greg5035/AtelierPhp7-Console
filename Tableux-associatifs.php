<?php

$tab = array();

$tab["php"] = "Langage de script web";
$tab["java"] = "Langage compilé avec machine virtuelle";
$tab["vb.net"] = "Langage compilé avec machine virtuelle créé par microsft";

echo $tab["php"];

//$tab = ["php"=>"Langage de script", "clé2"=>"val2"];

echo "\n";
$pays = array();

$pays["Jamaique"] = "Kingstown";
$pays["Cuba"] = "La Havane";
$pays["Magagascar"] = "Antananarivo";

echo $pays["Jamaique"];
//echo "\n";
//sort($pays);
//echo implode("," , $pays);

echo "\n";

//print_r(array_keys($pays));

$tab2 = array_keys($pays);
sort($tab2);
echo implode("," , $tab2);

echo "\n";

$tab3 = array_values($pays);
sort($tab3);
$tab3 = array_reverse($tab3);
echo implode("," , $tab3);
echo "a";

