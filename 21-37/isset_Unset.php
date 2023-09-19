<?php

class Index{
    ## __isset works when not real exist variable is called
    public function __isset($data){
        echo "you are trying to set invalid input to <span style='color:red;'>$data</span>";
    }

    public function __unset($data){
        echo "you are trying to set invalid input to <span style='color:red;'>$data</span>";
    }

}

$obj = new Index();
isset($obj->database);
echo "<br>";
unset($obj->mysqli);