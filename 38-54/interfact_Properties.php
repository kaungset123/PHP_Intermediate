<?php

## In an Interface
## variable can't declare , const can declare
## concrete method(i.e. method with body) can't declare , abstrac method (i.e. method with no body) can declare
## access modifier must be public 
## need to override all method when implement an interface
## a class can implement many interfaces

interface Mine{

    // private $name; ## error
    //  public $name="Mg Mg"; ## error
    const DB_HOST ="localhost";
    public function getResponse();
    // public function Response(){}; ## error
}
interface Ours{
    const DB_NAME ="Blog";
    public function show();
}

class Me implements Mine,Ours{

    public function getResponse(){ // overriding
        
    }

    public function show(){ // overriding
        
    }
}