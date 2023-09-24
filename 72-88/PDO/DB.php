<?php

require_once "DAL.php";
use PDO\DAL;

class DB extends DAL {

    public function __construct($db_host,$db_name,$db_user,$db_pass){
        parent::__construct($db_host,$db_name,$db_user,$db_pass);
    }

    public function connect(){

        if($this->db == NULL){  
            $this->db = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user,$this->db_pass);
        }else{
            return $this->db;
        }

    }

    public function disconnect(){
        
    }

    public function fetchData($table, $modifier){
        $stmt=$this->db->prepare();
    }

}

$db= new DB("localhost","Blog","root","");
var_dump($db->connect() );