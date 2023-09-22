<?php

use professor\gen\Shape;
use professor\Circle;
use professor\Square;

require_once "vendor/autoload.php";

class Checker {

    public function __construct()
    {
        $circle = new Circle(10);
        $this->getPrice($circle);

        $square = new Square(10,20);
        $this->getPrice($square);
    }

    public function getPrice(Shape $something){
        $area=$something->getArea();
        echo "Your total price is ".$area*100 . " $<hr>";
    }

}
new Checker;