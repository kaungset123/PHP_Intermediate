<?php

## __sleep method work when object is serialized
## __wakeup method work when serialized object is deserialized

class Index{

    public function __sleep(){
        echo "I wake when an object is serialized."."<br>";
        return []; // __sleep return array
    }

    public function __wakeup(){
        echo "I wake when an object is deserialized";
    }

}

$obj = new Index;
$aa = serialize($obj); // serializing
$bb = unserialize($aa); // deserializing
