<?php

$pass = 'abc123';
$hashpass =password_hash($pass,PASSWORD_DEFAULT,['cost'=>10]);
// echo $hashpass;
$confirm = password_verify($pass,$hashpass);
echo $confirm ? "true" : "false" ;