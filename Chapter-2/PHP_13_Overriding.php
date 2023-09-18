<?php

class Member{
    var $name="Kaung Kaung";
    var $age=20;
    public function doIt(){
        echo "I'm doing";
    }
    public function friendCount(){
        echo "I'm friend count method";
    }
}

class PHP_13_Overriding extends Member{
     public function friendCount(){
        $this->name="Zaung Zaung";
        echo "rewriting friend count function";
     }
}

$obj = new PHP_13_Overriding();
echo $obj->name;
$obj->friendCount();
