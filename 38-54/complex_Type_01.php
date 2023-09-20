<?php

class Rent{
    private $car,$driver;

    public function __construct(Car $car,Driver $driver)
    {
        $this->car=$car;
        $this->driver=$driver;
    }

    public function getCar() : Car{
        return $this->car;
    }

    public function getDriver() : Driver {
        return $this->driver;
    }
}

class Driver{
    private $name,$age,$family,$hourlyRate,$martialStatus;

    public function setName(string $name){
        $this->name=$name;
    }

    public function getName() : string {
       return $this->name;
    }

    public function setAge(int $age){
        $this->age=$age;
    }

    public function getAge() : int {
       return $this->age;
    }

    public function setFamily(array $family){
        $this->family=$family;
    }

    public function getFamily():array {
        return $this->family;
    }

    public function setHourlyRate(float $hourlyRate){
        $this->hourlyRate=$hourlyRate;
    }

    public function getHourlyRate():float {
        return $this->hourlyRate;
    }
    
    public function setMartialStatus(bool $martialStatus){
        $this->martialStatus=$martialStatus;
    }

    public function getMartialStatus():bool {
        return $this->martialStatus;
    }
}

class Car{
    private $brand,$model,$price,$spare,$available;

    public function __construct(String $brand,int $model,float $price,array $spare,bool $available)
    {
        $this->brand=$brand;
        $this->model=$model;
        $this->price=$price;
        $this->spare=$spare;
        $this->available=$available;
    }

    public function getBrand():string{
        return $this->brand;
    }
    public function getModel():int{
        return $this->model;
    }

    public function getPrice():float{
    return $this->price;
    }

    public function getSpare():array{
    return $this->spare;
    }

    public function getAvailable():bool{
    return $this->available;
    }

}

$dJohn = new Driver();
$dJohn->setName("John");
$dJohn->setAge(23);
$dJohn->setFamily(["Father"=>"Romio","Mother"=>"Julius","Brother"=>"Peter","Sister"=>"Willey"]);
$dJohn->setHourlyRate(12);
$dJohn->setMartialStatus(false);

$dJoe = new Driver();
$dJoe->setName("Joe");
$dJoe->setAge(24);
$dJoe->setFamily(["Wife"=>"Rosey","Son"=>"Sam","Daughter"=>"Marry"]);
$dJoe->setHourlyRate(12);
$dJoe->setMartialStatus(true);

$Toyota = new Car("Probox",2015,20.8,["snack","drink"],true);
$chevlous= new Car("chevlous",2015,57,["snack","drink"],false);

$rent1 = new Rent($Toyota,$dJohn);
$rent2 = new Rent($chevlous,$dJoe);

$list =[$rent1,$rent2];
echo "There are ".count($list)." cars in this company<hr>";

$serilizedData = serialize($list); // serilizing
echo $serilizedData . "<hr>";
$ary = unserialize($serilizedData); // unserilizing
echo "<pre>".print_r($ary)."</pre>";
echo "<hr>";

echo $ary[0]->getCar()->getModel();
echo "<hr>";
echo "<pre>".print_r($dJoe->getFamily(),true)."</pre>";