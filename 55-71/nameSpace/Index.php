<?php

use www\Home;
use www\Flower;
use www\ware\Filters;

require_once "www/home.php";
require_once "www/flower.php";
require_once "www/ware/filters.php";

class Index{

    public function __construct()
    {
      $home = new Home();
      $home->sayHome(); 

      Flower::sayFlower();

     Filters::sayFilter();
    }
}
new Index();