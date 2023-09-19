<?php

interface controler{
    public function setWeapon($something);
}

class sub implements controler{
    private $weapon;

    public function setWeapon($weapon) {
        $this->weapon=$weapon;
    }

    public function killNow(){
        echo "Terminate the enimies with ".$this->weapon;
    }
}
$obj = new sub();
$obj->setWeapon("Fist");
$obj->killNow();

