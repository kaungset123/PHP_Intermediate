<?php

class PHP_8_Getter_and_Encapsulation{
    private $name="Kaung Kaung";
    public function getter(){
        return $this-> name;
    }
}
$obj = new PHP_8_Getter_and_Encapsulation();
echo $obj -> getter();