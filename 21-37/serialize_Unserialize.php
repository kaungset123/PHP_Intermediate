<?php

## Serializing
// convert array data to string
// similar to encoding
// it is easier to store in database
// it is also easier to exchange data on http


$ary = [
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"]
];

$seri = serialize($ary);
echo $seri;
echo "<hr>";
$unseri = unserialize($seri);
echo "<pre>".print_r($unseri,true)."</pre>";