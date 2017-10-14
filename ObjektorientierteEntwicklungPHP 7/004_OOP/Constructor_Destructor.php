<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 14.10.2017
 * Time: 14:40
 */

class Auto {
    public $marke;

    function __construct($marke = "unknown")
    {
        $this->marke = $marke;
    }

    function __destruct()
    {
        echo "<br>" .  $this->marke . " wurde entfernt" . "<br>";
    }

    public function getMarke(){
        return $this->marke . "<br>";
    }
}

$bmw = new Auto("BMW");
echo $bmw->getMarke();

$x = new Auto();
echo $x->getMarke();

echo "<br>";

echo $bmw->marke;
$bmw = null;