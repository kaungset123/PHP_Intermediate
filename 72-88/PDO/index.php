<?php

require_once "database/Dal.php";

class index{

    public function __construct(){

        // $db= dbGen::getInstance()->getConn();   
        // var_dump($db);

        $dal=new DAL();
        $shops =[
            ["Makro","192.168.0.114","makro","2456",1],
            ["Dagoncnt","192.168.0.115","dagoncnt","8494",1],
            ["Bunchon","192.168.0.116","bunchon","2456",1]
        ];

        // $dal->insertMultiShops($shops);

        $dal->updateShops(12,"Bounchon","bounchon");

        // $dal->deleteShops(9);

        // $dal->joinTable(1);
       
    }
}

$Index= new index();