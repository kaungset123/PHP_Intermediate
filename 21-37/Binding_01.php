<?php

## $this => no binding error
## self:: => binding error
## static:: => no binding error

class One{
    public function className(){
        echo __CLASS__;
    }

    public function getClassName(){
        echo $this->className();
        echo self::className();
        echo static::className();
    }
}

class Two extends One{
    public function className(){
        echo __CLASS__;
    }
}

$one = new One();
$one->getClassName();
echo "<br>";
$two = new Two();
$two->getClassName();