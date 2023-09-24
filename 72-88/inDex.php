<?php

require_once "vendor/autoload.php";
use conquor\dataBase\dbGen;

class inDex{

    private $db;

    public function __construct(){
        $this->db=new dbGEN();
        // $this->db->getJoinData(1);
        $this->db->fetchAllShops(1);
    }

    
}
new inDex();