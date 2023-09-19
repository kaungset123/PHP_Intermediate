<?php

## __toString method work when an object is echo directly
## __invoke method work when an object is called wrongly as function
## __clone method work when an object is clone

class Index{

    public function __toString(){
        return "There is no properties and methods in this class"."<br>";
    }

    public function __invoke(){
        return "You are trying to call an object as function"."<br>";
    }

    public function __clone(){
        echo "You are trying to clone me.";
    }
}

$obj = new Index();
echo $obj;
echo $obj();
$aa = clone $obj;
