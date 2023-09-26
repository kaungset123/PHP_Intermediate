<?php

class myErrorClass extends Exception{};

function myErrorHandler($code,$Message,$file,$lineNum){

    echo "Error code is " .$code."<br>";
    echo "Error memssage is " .$Message."<br>";
    echo "Error file is" .$file."<br>";
    echo "Error line number is " .$lineNum."<br>";
    echo "<hr>";
    throw new myErrorClass($Message,$code);
}

set_error_handler("myErrorHandler");

try{
    include "Hello.php";
}catch(Exception $er){
    echo $er->getMessage();
}