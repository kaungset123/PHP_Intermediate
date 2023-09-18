<?php

class PHP_6_Access_Modifier{
    //private $name="Kaung Kaung"; // can't access from outside of class
    // protected $name="Kaung Kaung"; // can't access from outside of class
    public $name="Kaung Kaung"; // can access from outside of class
}
$obj = new PHP_6_Access_Modifier();
echo $obj -> name;