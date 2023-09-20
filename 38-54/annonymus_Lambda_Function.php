<?php

## Annonymus Function

$var = function ($num){
    echo "I'm annonymus function .my value is {$num}";
};
// $var();


## Lambda function

$aa = function($val){
    echo "I'm lambda.My value is {$val}";
};

 
function check($p1,$p2,$p3,$p4){
    $total = $p1*$p2;
   echo  $p3($total);
   echo "<hr>";
   echo $p4($total+4);
}

check(3,5,$var,$aa);


