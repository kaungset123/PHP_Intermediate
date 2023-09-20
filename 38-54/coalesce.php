<?php

## coalesce format (i.e. priority ?? secondary)
## if True , work priority
## if false , work secondary

function doIt(...$val){

    echo $val[0][2] ?? "Hello"; //coalesce style

}
doIt(["one","two"]);