<?php

class Index{
    private static $name="kaung kaung";
    private static $instance;

    private function __construct(){
        self::$name="daung daung";
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Index();
        }                           #
        return self::$instance;      #
    }                                 #    
                                       #     
    public static function getName(){  # 
       return self::$name;             #
    }               # # # # # # # # # # 
}                  #                  
 $ind = Index::getInstance();  // Index::getInstance will return an object
echo $ind->getName();