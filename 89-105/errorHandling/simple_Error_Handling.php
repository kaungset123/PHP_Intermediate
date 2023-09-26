<?php

function myFileRead($file){
    if(file_exists($file)){
        $control = fopen($file,'r');
        $size = filesize($file);
        $data = fread($control,$size);
    
        echo $data;
    }else{
        throw new Exception("File is not exist"); 
    }
    

}

try {
    myFileRead("ninja.txt");
}catch(Exception $er){
    echo $er->getMessage() . "<br>";
    echo $er->getCode() . "<br>"; ## result 0 means error code isn't define
    echo $er->getFile() . "<br>";
    echo $er->getTraceAsString() . "<br>";
    echo $er->getLine();
}