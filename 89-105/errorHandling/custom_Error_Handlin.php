<?php

class myCustomException extends Exception{
    public function __construct($message,$code){
       parent::__construct($message,$code); 
       echo "Error Up<br>";
    }
};

function FileRead($file){
    if(!file_exists($file))
        throw new myCustomException("File report by Custom error Handler",606);
}

try{
    FileRead('ninja.txt');
}catch(Exception $er){
    echo $er->getMessage();
}