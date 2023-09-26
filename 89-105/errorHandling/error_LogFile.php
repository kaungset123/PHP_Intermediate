<?php

class myCustomException extends Exception{
    public function __construct($message,$code){
       parent::__construct($message,$code); 
       $control = fopen("log.txt",'a');
       $data ="\n\nError Message :".$message."\nError Number :".$code."\nError Timestamp :". date("Y-m-d H:m:s",time())."<br>";
       fwrite($control,$data);
       fclose($control);
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