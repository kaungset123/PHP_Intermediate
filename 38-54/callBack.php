<?php

class Index{

    public function doIt($var){
        $i=0;
        $sum=0;
        while($i<100){
            $sum+=$i;
            $i++;
        }

        $this->$var($sum);

    }

    public function result($val){
        echo "Result is {$val}";
    }
}

$aa = new Index();
$aa->doIt("result"); // "result" is assigned to $var // call back function