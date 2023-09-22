<?php
error_reporting(0);

try{
    if(fopen("aa.text",'r')){
        echo "file reading successful";
    }else{
        throw new Exception("File can't be read!");
    }

}catch(Exception $er){
    echo $er->getMessage();
}finally{
    echo "<br>final";
}

if(fopen("aa.text",'r')){
    echo "file reading successful";
}else{
    echo "File can't be read!";
}


 
  
