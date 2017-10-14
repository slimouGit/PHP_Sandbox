<?php

class DatenContainer
 {
     protected $daten = array();

     public function  __set ($eintrag, $wert)
      {
         $this->daten[$eintrag] = $wert;
     }

     public function  __destruct ()
     {
         DBObjekt::speicherEintrageInTabelle($this->daten);
     }
 }

 $datenContainer = new DatenContainer();
 $datenContainer->Vorlesung = "Internetprogrammierung";
 $datenContainer-> __destroy() ; //Räumt den Speicher auf und sichert die Daten
 
?>