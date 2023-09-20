<?php

## self:: keyword is used to access the constant variable

class Index{
    public const DB_HOST = "localhost";
    public const DB_NAME = "Blog";
    public const DB_USER = "root";
    public const DB_PASS = "";

    public function __construct()
    {
        echo self::DB_HOST;
    }
}
$aa = new Index();