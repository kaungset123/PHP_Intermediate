<?php

// method in interface must be public

interface gameRules{
    public function createGameSence();
    public function createVegetable();
    public function createHousing();
    public function createActor();
}

class Index implements gameRules{
    public function createGameSence(){
        echo "I'm creating game sence."."<br>";
    }
    public function createVegetable(){
        echo "I'm creating vegetable."."<br>";
    }
    public function createHousing(){
        echo "I'm creating housings."."<br>";
    }
    public function createActor(){
        echo "I'm creating actor.";
    }
}

$mygame = new Index();
$mygame->createGameSence();
$mygame->createVegetable();
$mygame->createHousing();
$mygame->createActor();