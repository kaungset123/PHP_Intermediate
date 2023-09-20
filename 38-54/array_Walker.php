<?php

## array_walk( array-name , function )

$ary =["Korea"=>"seoul","Japan"=>"tokyo","England"=>"london"];

function show($aa,$bb){
    echo "Capital of $bb is $aa <hr>";
}

array_walk($ary,"show");

//==================================================================

## array_walker with lambda and closure

$num = 20;

array_walk($ary,function ($aa,$bb) use($num){echo "Capital of $bb is $aa and value is $num<hr>";});