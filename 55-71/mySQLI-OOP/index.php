<?php

use holder\database\dbGen;

require_once "vendor/autoload.php";

class index{
    private $db;

    public function __construct(){

        $shop =[
            ["CP","192.168.0.106","cp","123",0],
            ["OneStop","192.168.0.107","onestop","123",1],
            ["Ocean","192.168.0.108","cp","964",1],
            ["Junction","192.168.0.106","junction","123",1]
        ];

        $this->db=new dbGen(); 
        // $this->db->getSingleShop(1);
        // $this->db->getMultipleShop(1);
        // $this->db->getAllData();
        // $this->db->insertSingleShop("Loteria","192.168.0.105","loteria","123",1);
        // $this->db->insertMultipleShops($shop);
        // $this->db->updateShops("BBQ",1);
        $this->db->deleteShops(6);
    }
}
new index();