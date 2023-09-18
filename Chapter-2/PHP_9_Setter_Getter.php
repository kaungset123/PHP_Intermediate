<?php

class PHP_9_Setter_Getter{
    private $name="superman";

    public function setter($data){
        $this->name=$data;
    }
    public function getter(){
        return $this->name;
    }
}

$obj = new PHP_9_Setter_Getter();
$obj->setter("spiderman");
echo $obj->getter();

$aa = new PHP_9_Setter_Getter();
echo $aa->getter();