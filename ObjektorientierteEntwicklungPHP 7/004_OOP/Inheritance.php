<?php

/**
 * Created by PhpStorm.
 * User: salim
 * Date: 14.10.2017
 * Time: 14:53
 */
class Car
{
    public $brand;
    public $model;
    public $hp;
    public $speed;

    function __construct($brand, $model, $hp, $speed = 0)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->hp = $hp;
        $this->speed = $speed;
    }

    public static function setReturn(){
        echo "<br>";
    }

    public function printVehicle(){
        return $this->brand . " " . $this->model . " ($this->hp PS)";
    }

    public function accelerationCar($acceleration){
        printf("<br>current speed %d km/h" , $this->speed);
        return $this->speed+=$acceleration;
    }

    public function getSpeed(){
        return $this->speed . " km/h";
    }
}

class RacingCar extends Car {
    public function turboAcelerator(){
        return $this->speed*=1.5;
    }

    public function accelerationCar($acceleration){
        parent::accelerationCar($acceleration);
        return $this->turboAcelerator();
    }
}

$bmw = new Car("BMW", "Z3", 185);
echo $bmw->printVehicle();
Car::setReturn();
echo $bmw->getSpeed();
$bmw->accelerationCar(30);
Car::setReturn();
echo $bmw->getSpeed();

$ferrari = new RacingCar("Ferrari", "F5", 420);
RacingCar::setReturn();
echo $ferrari->printVehicle();
RacingCar::setReturn();
echo $ferrari->getSpeed();
$ferrari->accelerationCar(30);
RacingCar::setReturn();
echo $ferrari->getSpeed();