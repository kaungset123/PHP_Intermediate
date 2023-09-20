<?php


class uncle{  
}

class nephew{

    public function showtype(uncle $data){
        var_dump($data);
    }
}
 
$ne = new nephew();
$unc = new uncle();
$ne->showtype($unc);


