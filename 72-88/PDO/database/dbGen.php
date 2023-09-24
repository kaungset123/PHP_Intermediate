<?php

## SingleTon Design Pattern

class dbGen{

    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";
    private $conn;
    private static $instance;
 
    private function __construct(){

      try{
        $this->conn=new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER,self::DB_PASS);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if($this->conn){
            echo "database connection successful<hr>";
        }
     }catch(Exception $er){
        echo "custom error is" . $er->getMessage();
     }

    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new dbGen();
        }
         return self::$instance;
    }

    public function getConn(){
        return $this->conn;
    }

}