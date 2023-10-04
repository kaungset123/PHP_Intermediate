<?php
session_start();

?>

<form action="post.php" method="post">
        <input type="hidden" name="_token" value="<?php echo $_SESSION["_token"];?>">
        <input type="text" name="name" id="name" placeholder="name"><br><br>
        <input type="text" name="email" id="email" placeholder="email"><br><br>
        <textarea name="comment" id="comment"  rows="10"></textarea><br><br>
        <input type="submit" value="comment" class="submit">
</form>