<?php
// ini_set("display_errors","Off");
// phpinfo();
// error_reporting(0);
//  echo "<pre>".print_r($_SERVER,true)."</pre>";
//  echo $_GET['id'];

## table drop => id=1';DROP TABLE table-name;
## get data=> id='' OR 1=1

include '../app/config/db.php';

/*
$name = "henery";
$stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
$stmt->execute(["name"=>$name]);
$result=$stmt->fetch(PDO::FETCH_OBJ);
echo "<pre>".print_r($result,true)."</pre>";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "I am post method";
        $name = $_POST['name'];
        // $qry = $db->query("SELECT * FROM users WHERE name=$name ");
        $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
        $stmt->bindParam(":name",$name);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo "<pre>".print_r($result,true)."</pre>";
}   
    else{
        echo $_GET['url'];
        echo "I am get method";
        $id = $_GET['id'];
        $result = $db->query("SELECT * FROM users WHERE id=$id");
        $result->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo "<pre>".print_r($result,true)."</pre>";
    }
       
        // $id = $_GET['id'];
        // echo "ID is ".$id . "<br>";
  */   




    ?>
  <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
    <input type="text"  name="name">
    <input type="submit" name="submit">
</form> -->







