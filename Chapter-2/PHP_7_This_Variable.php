<?php

class PHP_7_This_Variable{
    var $name ="I'm Kaung Kaung";
    public function changeName(){
        $this->name= "I'm Zaung Zaung"."<br>";
    }
}

$aa = new PHP_7_This_Variable();
$aa -> changeName();
echo $aa -> name;


$bb = new PHP_7_This_Variable();
echo $bb -> name;  