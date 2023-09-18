<?php

class PHP_4_Accessing_Class_Method{
    public function show($name){
        echo "{$name} is studying PHP at PKT now.";
    }
}

$obj = new PHP_4_Accessing_Class_Method();
$obj -> show("Kaung Kaung");
    