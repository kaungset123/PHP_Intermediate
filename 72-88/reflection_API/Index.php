<?php
require_once "Member.php";


## Reflection Class
echo "<h3>Reflection Class</h3>";

$mem = new Member();
$reflect = new ReflectionClass('Member');

echo $reflect->getName();
echo "<br>";
echo $reflect->hasMethod("getDetailInfo");
echo "<br>";
echo $reflect->isInternal();
echo "<br>";
echo $reflect->isCloneable();
echo "<br>";
echo $reflect->isInterface();

showData(get_class_methods($reflect));

function showData($ary){
    echo "<pre>". print_r($ary,true) ."</pre>";
}

echo "<hr>";
//===========================================================

## ReflectionMethod( class-name , function-name your want to test )
## Reflection Method
echo "<h3>Reflection Method</h3>";

$reflec = new ReflectionMethod('Member','getInfo');

$reflec->isPublic();
echo $reflec ? "It is public" : "It is not public";
echo "<br>";
echo $reflec->invokeArgs($mem,["bcd134"]);

function showbar($ary){
    echo "<pre>". print_r($ary,true) ."</pre>";
}

showbar(get_class_methods($reflec));

echo "<hr>";
//===========================================================

## ReflectionProperties
echo "<h3>Reflection Property</h3>";

$reflecPrpty = new ReflectionProperty('Member','detailInfo');
echo $reflecPrpty->getName();
echo "<br>";
showData($reflecPrpty->getValue($mem));


showProperty(get_class_methods($reflecPrpty));
function showProperty($ary){
    echo "<pre>". print_r($ary,true) ."</pre>";
}

echo "<hr>";
//===========================================================

## Reflection Parameters
## ReflectionParameter([class-name,function-name] , index of argu in function )
echo "<h3>Reflection Parameters</h3>";

$reflecPara = new ReflectionParameter(['Member','getDetailInfo'],1);
echo "type = " . $reflecPara->getType();
echo "<br>";
echo "position = ". $reflecPara->getPosition();
showData(get_class_methods($reflecPara));

echo "<hr>";
//===========================================================


echo "<h3>Reflection Object</h3>";

$reflecObj = new ReflectionObject($mem);
echo $reflecObj->getName() . "<br>";
echo $reflecObj->hasMethod("setAuth") . "<br>";
echo $reflecObj->getConstructor(). "<br>";
echo $reflecObj->getStartLine();

showData(get_class_methods($reflecObj));


