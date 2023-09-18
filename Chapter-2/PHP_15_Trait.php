<?php

trait first{
    var $name="Kaung Kaung";
    public function one(){
        echo "I'm from first";
    }
}

trait second{
    var $age=20;
    public function two(){    
        echo "I'm from second";
    }
}

trait third{
    var $add="Yangon";
    public function three(){       
        echo "I'm from third";
    }
}

trait mama{  
    use first,second,third;
}

class PHP_15_Trait{
    use mama;
}


$obj = new PHP_15_Trait();
echo $obj->name;
echo $obj->age;
echo $obj->add;
$obj->one();
$obj->two();
$obj->three();



    

