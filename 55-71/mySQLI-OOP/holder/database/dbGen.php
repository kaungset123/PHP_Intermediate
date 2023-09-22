<?php

namespace holder\database;

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

    public function getSingleShop($id){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param('i',$id);
        $result=$stmt->execute();
        var_dump($result);
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($stmt->fetch()){
            echo $id."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password."<br>".$state."<br>".$created_at;
        }
    }

    public function getMultipleShop($state){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i',$state);
        $result=$stmt->execute();
       
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($stmt->fetch()){
            echo $id."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password."<br>".$state."<br>".$created_at;
        }
    }

    public function getAllData(){
        $result =$this->conn->query("SELECT * FROM shops");
        while($rows= $result->fetch_object()){
            echo $rows->name;
        }
    }

    public function insertSingleShop($name,$ipadd,$user,$pass,$state){
        $day = date("Y-m-d H:m:s");
        $stmt=$this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) 
              VALUES (?,?,?,?,?,?)");
        $stmt->bind_param('ssssis',$name,$ipadd,$user,$pass,$state,$day);
        $result=$stmt->execute();
        echo $result ? "Data inserted successfully" : "Data insertion failed";
    }

    public function insertMultipleShops($shops){
        $day = date("Y-m-d H:m:s");
        $stmt=$this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) 
              VALUES (?,?,?,?,?,?)");
        foreach($shops as $shop){
            $stmt->bind_param('ssssis',$shop[0],$shop[1],$shop[2],$shop[3],$shop[4],$day);
            $result=$stmt->execute();
            $lastInsetId= $stmt->insert_id;
            echo "successfully inserted".$shop[0]."with id of".$lastInsetId;
        }

    }

    public function updateShops($name,$shopid){
        $stmt=$this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
        $stmt->bind_param('si',$name,$shopid);
        $result=$stmt->execute();
        echo $result;
    }

    public function deleteShops($shopid){
        $stmt=$this->conn->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param('i',$shopid);
        $result=$stmt->execute();
        echo $result;
    }

}