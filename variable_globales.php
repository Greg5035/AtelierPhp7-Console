<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//global $a;
$a = "abc";

function define123() {
   global $a;
    
    $a = "123";
}


//$a = "abc";
define123();
echo $a;