<?php

class Member{

    public function __construct(){
        echo "Parent constructor is working"."<br>";
    }
    
}

class PHP_14_Parent_Constructor_invoke extends Member{

    public function __construct(){
        parent::__construct();
        echo "Child constructor is working";
    }       
    
}

$obj = new PHP_14_Parent_Constructor_invoke();
