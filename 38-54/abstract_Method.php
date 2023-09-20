<?php

## abstract method don't have body
## when an abstract method contain in a class , this class must be an abstract class too
## must override the abstract method when you extends abstract class
## a class can extends only an abstract class , but can extends indirectly (e.g [mama to papa]-> son)

abstract class Mama{
    public $hername="mama";
}

abstract class Papa extends Mama{
    private $something;
    private $name;
    public abstract function show();

    public function __construct($name)
    {
        echo $this->name=$name . "<hr>";
    }

    public function getAsso($something){
        $this->something=$something;
    }

    public function decorate(){
        echo "Decorate this with {$this->something}.<hr>";
    }

}

class son extends Papa {
    public function show(){
        echo "Show me something"."<hr>";
    }
}

$aa = new son("kaung kaung");
$aa->show();
$aa->getAsso("flowers");
$aa->decorate();
echo $aa->hername;