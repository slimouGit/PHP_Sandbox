<?php

class Car_PublicPrivate
{
    public $typ;
    private $hp;

    public function __construct($hp)
    {
        $this->hp = $hp;
        $this->drive("Spritzfahrt");
        echo "<br/>";
    }

    //Getter-Methode
    public function getHP(){
        return $this->hp;
    }

    //Setter-Methode
    public function setHP($hp){
        if($hp>250){
            $hp=200;
        };
        $this->hp = $hp;
    }

    private function drive($location){
        var_dump("Ein {$this->typ} faehrt mit {$this->hp} PS in {$location}");
        echo "<br/>";
    }
}

//----------------------------------------------------------------------------
$vw = new Car_PublicPrivate(150);
$vw ->typ = "VW";

var_dump($vw->getHP());
$vw->setHP(300);
echo "<br/>";
//$vw->drive("Frankfurt");

//----------------------------------------------------------------------------
$porsche = new Car_PublicPrivate(300);
$porsche->typ = "Porsche";

//$porsche->drive("Kassel");

//----------------------------------------------------------------------------
echo "<br/>";

var_dump($porsche);
?>