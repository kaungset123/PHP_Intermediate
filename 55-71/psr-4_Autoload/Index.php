<?php

require_once "vendor/autoload.php";

use www\Home;
use www\Flower;
use www\ware\Filters;
use www\container\Container;
use weapon\Weapon;


class Index{

    public function __construct()
    {
      $home = new Home();
      $home->sayHome(); 

      Flower::sayFlower();

     Filters::sayFilter();

     Container::sayContainer();

     Weapon::sayWeapon();
    }
}
new Index();