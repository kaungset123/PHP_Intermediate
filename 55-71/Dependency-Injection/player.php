<?php


class Player{

    private $path,$music;


    public function setPath($path){
        $this->path=$path;
    }

    public function setMusic($music){
        $this->music=$music;
    }
    
    public function getMusic(){
        return $this->music;
    }

    public function getPath() {
        return $this->path;
    }
    
}
