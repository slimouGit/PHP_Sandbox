<?php

class Car_constructor
{
    public $typ;
    public $hp;

    public function __construct($hp)
    {
        $this->hp = $hp;
        var_dump("__construct runs");
        echo "<br/>";
    }

    public function drive($location){
        //var_dump($this->hp);//$this bezieht sich auf das spezifische Objekt
        var_dump("Ein {$this->typ} faehrt mit {$this->hp} PS in {$location}");
        echo "<br/>";
    }
}

//----------------------------------------------------------------------------
$vw = new Car_constructor(150);
$vw ->typ = "VW";

$vw->drive("Frankfurt");

//----------------------------------------------------------------------------
$porsche = new Car_constructor(300);
$porsche->typ = "Porsche";

$porsche->drive("Kassel");

//----------------------------------------------------------------------------
echo "<br/>";

var_dump($porsche);
?>