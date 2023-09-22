<?php

class loader{
    public static function loader($className){
        include_once $className.".php";
    }
}