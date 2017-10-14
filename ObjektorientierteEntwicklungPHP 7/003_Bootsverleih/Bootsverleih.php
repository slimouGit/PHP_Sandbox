<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 14.10.2017
 * Time: 11:47
 */

class Bootsverleih{
    const STUNDENSATZ = 4;

    public $ausleihe = array();

    public function bootAusleihen($name, $bootNumer){
        echo "Verleih<br>";

        $uhrzeit = date("H:m");

        $this->ausleihe[$bootNumer] = array("name" => $name, "start" => $uhrzeit);
        printf("- Boot #%d eingebucht um %s Uhr von $name<br>", $bootNumer, $uhrzeit);
    }

    public function bootAbgeben($bootNummer){
        $ausleihe = $this->ausleihe[$bootNummer];
        $this->ausleihe[$bootNummer] = null;

        //Dauer berechnen
        $dauer = 2;
        $kosten = $dauer*self::STUNDENSATZ;

        echo "Rückgabe<br>";
        echo "- Dauer: $dauer Stunden<br>";
        echo "- Kosten: $kosten Euro";
    }
}

$verleih1 = new Bootsverleih();
$verleih1->bootAusleihen("Tina", 4587);

$verleih2 = new Bootsverleih();
$verleih2->bootAusleihen("Max", 4588);

$verleih1->bootAbgeben(4587);