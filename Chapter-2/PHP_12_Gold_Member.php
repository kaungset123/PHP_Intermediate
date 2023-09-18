<?php

class Member{
    var $name="Kaung Kaung";
    var $age=29;
    public function friendCount(){
        echo "I'm friend count method";
    }
}

class PHP_12_Gold_Member extends Member{

}

$gold = new PHP_12_Gold_Member();
echo $gold->name;
$gold->friendCount();