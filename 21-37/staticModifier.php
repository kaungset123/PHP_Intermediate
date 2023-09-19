<?php



class Index {
    private static $count=0;

    public function getCount(){
        self::$count++;
        echo self::$count;

    }


}

$aa = new Index();
$aa->getCount();
$aa->getCount();

echo "<hr>";

$bb = new Index();
$bb->getCount();
$bb->getCount();