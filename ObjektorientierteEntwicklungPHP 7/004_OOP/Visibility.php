<?php

/**
 * Created by PhpStorm.
 * User: salim
 * Date: 14.10.2017
 * Time: 17:14
 */
class Car
{
    private $brand;
    private $model;
    private $hp;
    protected $speed;

    function __construct($brand, $model, $hp, $speed = 0)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->hp = $hp;
        $this->speed = $speed;
    }

    public function getSpeed(){
        return $this->speed . " km/h";
    }

    public function setSpeed($arg){
        if($this->isToFast($arg)) {
            echo "zu schnell";
            return;
        }$this->speed += $arg;
    }

    //nicht direkt aufrufbar
    private function isToFast($arg){
        if($this->speed+$arg>220) {
            return true;
        }
        return false;
    }
}

class RacingCar extends Car {
    public function speedStart(){
        $this->speed=50;
    }
}

$bmw = new Car("BMW","Z3",185);
$bmw->setSpeed(20);
echo $bmw->getSpeed();
echo "<br>";
$bmw->setSpeed(120);
echo $bmw->getSpeed();
echo "<br>";
$bmw->setSpeed(120);
echo "<br>";
echo $bmw->getSpeed();

echo "<br>";

$audi = new RacingCar("Audi", "A4", 340);
echo $audi->getSpeed();
echo "<br>";
$audi->speedStart();
echo $audi->getSpeed();
echo "<br>";
$audi->setSpeed(50);
echo $audi->getSpeed();
