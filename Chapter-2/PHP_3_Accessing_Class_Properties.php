<?php

class PHP_3_Accessing_Class_Properties{
   var $name = "Kaung Kaung";
   var $age = 20;
}

$obj = new PHP_3_Accessing_Class_Properties();

echo "{$obj -> name}  is  {$obj -> age}  years old.";