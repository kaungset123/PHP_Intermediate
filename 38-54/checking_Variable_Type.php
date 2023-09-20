<?php

## is_int()
## is_string()
## is_bool()
## is_null()
## is_float()

class checker{
    
    public function checkIt($data){
        if(is_int($data)){
            echo "This is an ideal data type";
        }else{
            echo "This data type is invalid";
        }
    }
}

$check = new checker();
$check->checkIt("30");