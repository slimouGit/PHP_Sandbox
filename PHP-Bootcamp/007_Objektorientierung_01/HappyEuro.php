<?php

class HappyEuro
{
    private $artPosition;
    private $namePosition;
    private $betragPosition;
    public $deletePosition;

    public function __construct($artPosition,$namePosition,$betragPosition,$deletePosition=false)
    {
        $this->artPosition = $artPosition;
        $this->namePosition = $namePosition;
        $this->betragPosition = $betragPosition;
        $this->deletePosition = $deletePosition;
    }

    public function getArtPosition(){
        return $this->artPosition;
    }

    public function getNamePosition(){
        return $this->namePosition;
    }

    public function getBetragPosition(){
        return $this->betragPosition;
    }

    public function deletePosition(){
        $this->deletePosition = true;
        echo "{$this->namePosition} wurde deaktiviert<br/>";
    }

    public function printPosition(){
        if($this->deletePosition==false) {
            echo "-----------------------------------------<br/>";
            echo "Art Position: {$this->artPosition}<br/>";
            echo "Name Position: {$this->namePosition}<br/>";
            echo "Betrag Position: {$this->betragPosition}<br/>";
            echo "-----------------------------------------<br/>";
        }else{
            echo "-----------------------------------------<br/>";
            echo "Position {$this->namePosition} ist nicht aktiv.<br/>";
            echo "-----------------------------------------<br/>";
        }
    }
}

//--------------------------------------------------------------------------------

$miete = new HappyEuro("Ausgabe", "Miete", 800);
$miete->printPosition();
$miete->deletePosition();
$miete->printPosition();

$gehalt = new HappyEuro("Einnahme", "Gehalt", 58000);
$gehalt->printPosition();

$strom = new HappyEuro("Ausgabe", "Strom", 55);
$strom->printPosition();