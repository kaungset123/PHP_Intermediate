<?php

## non-static method can call static-method
## static-method can call static-method
## when call static-method ## use self::

class Index{
    public static $count=0;

    public static function showMe(){
        echo ++self::$count;
        echo "<br>";
        echo self::saySomething();
    }

    public static function saySomething(){
        echo "I'm saySomething function";
    }
}


## static method can't call non-static method
## error

// class Index{
//         public static $count=0;

//     public static function showMe(){     
//         echo $this->count++;
//         echo "<br>";
//         echo saySomething();
//     }

//     public function saySomething(){
//         echo "I'm saySomething function";
//     }

// }

$obj = new Index();
$obj->showMe();