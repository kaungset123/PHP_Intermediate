<?php
include_once 'app/config/db.php';
$db = new DB();

$date = new DateTime('+1 dat');
// setcookie("token",time(),$date->getTimestamp()); ## unsafe cookie
// setcookie("token","6849729379",$date->getTimestamp(),"/",null,null,true); ## safe cookie ## http only cookie

echo $_COOKIE['token'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // echo "name is ".$name."<br>";
    // echo "email is ".$email."<br>";
    // echo "comment is ".$comment."<br>";

    if($db->insert($name,$email,$comment))
       header('Location:Xss.php');
    else
        echo "<script>alert('post insertion fail')</script>";
    
}else{
    $comments = $db->getAllComment();
    echo count($comments);
}


?>
<style>
    .wrapper{
        border: 1px solid black;
        width: 400px;
        height: 600px;
        margin: 0 auto;
        margin-top: 50px;
    }
    form{
        /* margin-top: 20px;
        margin-left: 48px; */
        margin: 20px 0px 50px 48px;
        
    }
    #name,#email,#comment{
        width: 300px;
        padding-left: 10px;
        /* margin: 30px 0 0 40px; */
    }

    .submit{
        padding: 5px;
        background: blue;
        border: none;
        border-radius: 5px;
        color: white;
        float: right;
        margin-right: 55px;
        /* width: 0; */
        /* margin: 0; */
    }
    .panel{
        background: #eee;
        height: 170px;
        overflow: scroll;
        margin: 20px;
    }
    span{
        color: black;

    }
    ul{
        margin: 0;
        padding: 0;
    }
    li{
        list-style: none;
        border-bottom: 1px solid white;
        padding: 10px;
    }
    h1{
        text-align: center;
    }
</style>
<div class="wrapper">
    <h1>Comment below</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" id="name" placeholder="name"><br><br>
        <input type="text" name="email" id="email" placeholder="email"><br><br>
        <textarea name="comment" id="comment"  rows="10"></textarea><br><br>
        <input type="submit" value="comment" class="submit">
    </form>
    <!-- escaping html tag -->
<!-- Opening &lt;h1&gt; tag and closing &lt;/h1&gt; tag are used to creat header   -->

    <!-- write as follow
    <xmp>
    <div class="">
        <ul></ul>
        <section>
            <span>

            </span>
        </section>
    </div>
    </xmp> -->

    <div class="panel">
        <ul>
            <?php foreach($comments as $com):?>
                <li><span><?php echo $com->name ;?></span>
                <span><?php echo $com->email ;?></span>
                <span><?php echo $com->comment ;?></span>
            </li>
           
            <?php endforeach;?>
        </ul>
    </div>
</div>