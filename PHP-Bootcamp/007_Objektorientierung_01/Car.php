<?php

class Car
{
    public $typ;
    protected $hp;

    public function drive(){
        //var_dump($this->hp);//$this bezieht sich auf das spezifische Objekt
        var_dump("Ein {$this->typ} faehrt mit {$this->hp} PS");
        echo "<br/>";
    }
}

class SuperCar extends Car
{
    public function __construct($hp)
    {
        $this->hp = $hp +500;
    }

    public function fly(){
        var_dump("Ein SuperCar ist am Fliegen");
    }
}

//----------------------------------------------------------------------------
$vw = new Car();
$vw ->typ = "VW";
//$vw ->hp = 150;

$vw->drive();

//----------------------------------------------------------------------------
$porsche = new SuperCar(156);
$porsche->typ = "Porsche";
//$porsche ->hp = 300;

$porsche->drive();
$porsche->fly();

//----------------------------------------------------------------------------
echo "<br/>";

var_dump($porsche);





?>