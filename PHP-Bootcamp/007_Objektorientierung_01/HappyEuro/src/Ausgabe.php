<?php

/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 30.03.17
 * Time: 12:42
 */
class Ausgabe extends Position
{
    public $artPosition = "Ausgabe";

    public function printPosition()
    {
        if ($this->deleted == false) {
            var_dump($this->artPosition);
            var_dump($this->namePosition);
            var_dump($this->betragPosition);
            echo "<br/>";
        } else {
            echo "{$this->namePosition} ist nicht aktiv<br/>";
        };
    }

    public function switchArtPosition(){
        if($this->artPosition == "Ausgabe"){
            $this->artPosition="Einnahme";
        }else{
            $this->artPosition ="Ausgabe";
        }
    }

}

