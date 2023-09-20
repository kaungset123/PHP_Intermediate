<?php

function show($aa,$bb){
    echo "Capital of $bb is $aa <hr>";
}

function takeIt(...$val){
   
    array_walk($val[0],"show");
}

// takeIt("one");
// takeIt(["one","two","three"],["four","five"]);
takeIt(["Korea"=>"seoul","Japan"=>"tokyo","England"=>"london"]);