<?php

class PHP_11_Destructor{
    var $t=0;
   public function __construct(){
        echo "I'm constructor.Work started"."<br>";
   }

   public function loopIt(){
    for($i=0;$i<100;$i++){
        $this->t+=$i;
    }
    echo "The Result is {$this->t}."."<br>";
   }

   public function __destruct(){
        echo "I'm destructor.Work ended.";
   }
}
$obj = new PHP_11_Destructor();
$obj->loopIt();
$obj->t;