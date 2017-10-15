<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 15.10.2017
 * Time: 13:52
 */

interface Vehicle {

    public function gasUp($vol);

}

class Car implements Vehicle{

    private $carName;
    private $tankVolume;

    function __construct($carName, $tankVolume=0){#
        $this->carName=$carName;
        $this->tankVolume=$tankVolume;
    }

    public function gasUp($vol)
    {
        $this->tankVolume+=$vol;
    }

    public function getVehicle(){
        return $this->carName;
    }

    public function getTankValue(){
        return $this->tankVolume . " Liter Benzin";
    }
}

class Plane implements Vehicle {
    private $planeName;
    private $tankVolume;

    function __construct($planeName, $tankVolume=0){#
        $this->planeName=$planeName;
        $this->tankVolume=$tankVolume;
    }

    public function gasUp($vol)
    {
        $this->tankVolume+=$vol;
    }

    public function getVehicle(){
        return $this->planeName;
    }

    public function getTankValue(){
        return $this->tankVolume . " Liter Kerosin";
    }
}

class GasStation{
    public static function petrolPump(Vehicle $vehicle, $vol){
        $vehicle->gasUp($vol);
    }
}

$bmw = new Car("BMW");
echo $bmw->getVehicle();
echo "<br>";
echo $bmw->getTankValue();
echo "<br>";
$bmw->gasUp(45);

GasStation::petrolPump($bmw, 40);

echo $bmw->getTankValue();

echo "<br>";

$jumbo = new Plane("Jumbo");
echo $jumbo->getTankValue();
echo "<br>";
GasStation::petrolPump($jumbo,2000);
echo $jumbo->getTankValue();