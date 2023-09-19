<?php

use Index as GlobalIndex;

require_once "boy_Interface.php";
require_once "girl_interface.php";

class Index implements boy_interface,girl_Interface{
    private $data;

    public function girlGoSchool($data){
        $this->data=$data;
    }

    public function boyGoschool($data){
        $this->data=$data;
    }

    public function output(){
        echo "This person is busy with ".$this->data[count($this->data)-1];
        echo "<pre>".print_r($this->data,true)."</pre>";
    }
}

$gg = new Index();
$gary = ["book","pencil","ruler","cosmetic"];
$gg->girlGoSchool($gary);
$gg->output();

echo "<hr>";

$bb = new Index();
$bary = ["book","pencil","ruler","top"];
$bb->boyGoschool($bary);
$bb->output();

