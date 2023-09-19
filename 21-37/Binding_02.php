<?php

class One{
    public static $name="kaung kaung";

    public static function authorName(){
        echo self::$name;
    }

    public static function getAuthorName(){
        echo self::authorName(); // binding error
        echo static::authorName(); // no binding error
     
    }
}

class Two extends One{
    public static function authorName(){
        echo self::$name." and daung daung";
    }
}

$one = new One();
$one->getAuthorName();
echo "<hr>";
$two = new Two();
$two->getAuthorName();