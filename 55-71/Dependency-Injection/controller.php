<?php

require_once "player.php";

class Controller{

    public function __construct(){
        
        $player = new Player();
        $player->setPath("C:User/kk/document/music/");
        $player->setMusic("Loveyourself.mp3");
        $this->playNow($player->getPath(),$player->getMusic());
    }

    public function playNow($path,$music){
        echo "You are now playing $music from $path";
    }
}
$control = new Controller();