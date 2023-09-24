<?php

require_once "dbGen.php";

class DAL{
    private $db;

    public function __construct(){
        $this->db=dbGen::getInstance()->getConn();

    }

    public function getSingleShop($id){

        $smst=$this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $smst->bindParam(":id",$id);
        $smst->execute();
        $smst->bindColumn("name",$name);
        $smst->bindColumn("ipadd",$ipadd);
        $result=$smst->fetchObject();

        echo $result->name . "<br>" . $result->ipadd;

        // while($smst->fetchObject()){
        //     echo $name . "<br>" . $ipadd;
        // }
    }

    public function getAllShops($state){

        $smst=$this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $smst->bindParam(":state",$state);
        $smst->execute();

        // $result=$smst->fetchAll(PDO::FETCH_ASSOC); ## result is array , so get the value with []
        // foreach($result as $item){
        //     echo $item["name"] . "<hr>";
        // }

        $result=$smst->fetchAll(PDO::FETCH_OBJ); ## result is object , so get the value with ->
        foreach($result as $item){
            echo $item->name . "<br>";
        }

    }

    public function insertSingleShop($name,$ipadd,$username,$password,$state){
        
        $datty = date("Y-m-d H:m:s");
        $stmt=$this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
            VALUE (:name,:ipadd,:username,:password,:state,:created_at) ");
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":ipadd",$ipadd);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);
        $stmt->bindParam(":state",$state);
        $stmt->bindParam(":created_at",$datty);

        $result = $stmt->execute();
        $insertId =$this->db->lastInsertId();

        echo $result ? "data insertion successful" . $insertId : "data insertion fail";

    }

    public function insertMultiShops($shops){
        $datty = date("Y-d-m H:m:s");
        $stmt=$this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
        VALUE (:name,:ipadd,:username,:password,:state,:created_at) ");

        foreach($shops as $shop){
            $stmt->bindParam(":name",$shop[0]);
            $stmt->bindParam(":ipadd",$shop[1]);
            $stmt->bindParam(":username",$shop[2]);
            $stmt->bindParam(":password",$shop[3]);
            $stmt->bindParam(":state",$shop[4]);
            $stmt->bindParam(":created_at",$datty);

            $result=$stmt->execute();
            $insertId =$this->db->lastInsertId();

            echo $result ? "data insertion successful" . $insertId : "data insertion fail";

        }
    }

    public function updateShops($id,$name,$username){

        $stmt=$this->db->prepare("UPDATE shops SET name=:name,username=:username WHERE id=:id");
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":username",$username);
        $result=$stmt->execute();

        echo $result ? "data update successful"  : "data update fail";

    }

    public function deleteShops($id){

        $stmt=$this->db->prepare("DELETE FROM shops WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $result=$stmt->execute();

        echo $result ? "data deletion successful"  : "data deletion fail";

    }

    public function joinTable($shopid){
        $stmt=$this->db->prepare("SELECT
            sh.name as name,
            sh.ipadd as ipadd,
            SUM(od.price * od.amount) as total
        FROM 
            shops as sh
        LEFT JOIN
            orders as od
        ON
            sh.id = od.shopid
        WHERE 
            sh.id = :id AND sh.state =1
        ");
        $stmt->bindParam(":id",$shopid);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);
        $stmt->bindColumn("total",$total);
        $result=$stmt->fetchObject();

        echo $result->name."<br>". $result->ipadd."<br>". $result->total." $<br>";
    }
}

