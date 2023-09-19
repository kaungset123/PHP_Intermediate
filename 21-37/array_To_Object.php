<?php

$ary =[ "One"=>1,"Two"=>2,"Three"=>3];

var_dump($ary);
echo "<br>";
echo $ary["One"]; // getting the value in array style

echo "<hr>";

$obj = (object) $ary; // changing array to object
 
var_dump($obj);
echo "<br>";
echo $obj->One; // getting the value in object style