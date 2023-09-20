<?php

## Closure function can access global variable with use() 
## Closure can access private variable

$num =20;

$clos = function() use($num) {
    echo "I'm Closure . My value is $num";
};
$clos();