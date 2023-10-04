<?php
include_once 'app/config/db.php';
$db = new DB();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST["_token"]){
        if($_POST["_token"] == $_SESSION["_token"]){
            $result = $db->insert($_POST['name'],$_POST['email'],$_POST['comment']);
            echo $result ? "insert successful" : "insert fail";
        }else{
            echo "token problem";
        }
      
    }else{
        echo "invalid frquest";
    }
  
};

$_SESSION["_token"] = bin2hex(openssl_random_pseudo_bytes(16));
?>