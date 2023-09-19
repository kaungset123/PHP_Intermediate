<?php

class Index{

    ## __isset works when not real exist variable is called
    public function __get($var){
        echo "your input is invalid.";
    }

    public function __set($var,$value){
        echo "your are setting invalid input {$var} and {$value}";
    }

}
$obj = new Index();
$obj->name="kaung kaung";