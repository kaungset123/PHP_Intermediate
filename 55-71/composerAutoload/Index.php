<?php

require_once "vendor/autoload.php";


class Index{

    public function __construct()
    {
        Start::sayStartName();
        Home::sayHomeName();
        Filter::sayFilterName();
        Helper::sayHelperName();
        End::sayEnd();
    }
}

new Index();