<?php

class PHP_5_Method_Overloading{
    public function show($default=20){
        echo "I am $default years old.";
    }
}
$obj = new PHP_5_Method_Overloading();
$obj -> show(16);