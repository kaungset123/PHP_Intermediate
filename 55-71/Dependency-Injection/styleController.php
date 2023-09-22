<?php

require_once "vendor/autoload.php";
use apply\Posts\Post;
use apply\Author\Author;

class Scontroller{

    public function __construct(){
        $fname = "james";
        $lname = "Bone";
        $content ="I will shoot my kiss to you";

        $author = new Author($fname,$lname);

        $post = new Post($author,$content);
        $this->answerOut($post);

    }

    public function answerOut(Post $post){
        echo $post->getAuthor()->getFname();
        echo "<br>";
        echo $post->getAuthor()->getLname();
        echo "<br>";
        echo $post->getContent();
    }
}
new Scontroller;
