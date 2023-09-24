<?php

namespace conquor\dataBase;

use mysqli;

class dbGen{

    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";

    private $conn;
 
    public function __construct(){

        $this->conn= new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);

    }

    public function getJoinData($state){
        $stmt=$this->conn->prepare ("  SELECT 
            od.id as order_id,
            sh.name as shop_name,
            dh.name as dish_name,
            od.price * od.amount as total,
            od.created_at as datty
        FROM 
            orders as od
        LEFT JOIN
            shops as sh
        ON
            sh.id = od.shopid
        INNER JOIN
            dishes as dh
        ON
            dh.id = od.dishid
        WHERE
            od.state=?    
        
        ");
        $stmt->bind_param('i',$state);
        $result = $stmt->execute();
        $stmt->bind_result($orderId,$shopName,$dishName,$total,$datty);
        while($stmt->fetch()){
            echo $orderId."<br>" . $shopName . "<br>" . $dishName . "<br>" . $total . "<br>" . $datty . "<hr>";
        }

    }

    
    public function fetchAllShops($state){
        $stmt=$this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i',$state);
        $stmt->execute();
        $result = $stmt->get_result();
        $data =$result->fetch_all();

       echo  "<pre>".print_r($data,true)."</pre>";
    }

}