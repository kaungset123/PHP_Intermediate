<?php

class Type{
    public function typeTest(string $data) : int{
        return 10;
    }
}
$aa = new Type();
echo $aa->typeTest("hello");