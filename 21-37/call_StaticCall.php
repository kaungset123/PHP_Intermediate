<?php

class Index{

    # __call function works when not really exist function is called
    public function __call($method,$value){
        echo "You are calling not exist function";
        echo "<pre>".print_r($value)."</pre>";
    }

    public static function __callStatic($name, $arguments) {
        echo "You are calling not exist static method {$name} with parameters of<hr>";
        echo "<pre>".print_r($arguments,true)."</pre>";
    }
}


$obj = new Index();  // invoke for __call function
$obj->doSome("kaung kaung","daung daung");

echo "<hr>";

Index::hey("saung saung","eaung eaung"); // invoke for __callStatic function