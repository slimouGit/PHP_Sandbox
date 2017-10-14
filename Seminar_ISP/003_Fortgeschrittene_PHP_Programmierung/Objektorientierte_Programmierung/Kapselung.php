<?php
class DivisionDurchZwei
{
    protected $nenner = 2;
    public $zaehler = 2;

    public function __construct($zaehler = 2)
    {
        $this->meinZaehler = $zaehler;
    }

    public function ergebnis()
    {
        return $this->meinZaehler / $this->nenner;
    }
}

$divisionDurchZwei = new DivisionDurchZwei(10);
print($divisionDurchZwei->ergebnis()); //gibt 5 aus

//So geht es nicht, da   $nenner   protected nicht außerhalb der Klasse
//aufgerufen werden kann. Gibt einen Fatalen Fehler aus
//$divisionDurchZwei->nenner = 0;  //Fehler bei der Zuweisung!
//print($divisionDurchZwei->ergebnis());
?>