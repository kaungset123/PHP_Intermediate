<?php
include_once "loader.php";

class Index{

    public  function __construct()
    {
        loader::loader('hello');
        Hello::sayHello();

        loader::loader('haha');
        Haha::sayHaha();

        loader::loader('hola');
        Hola::sayHola();
        
    }
}

$obj = new Index();