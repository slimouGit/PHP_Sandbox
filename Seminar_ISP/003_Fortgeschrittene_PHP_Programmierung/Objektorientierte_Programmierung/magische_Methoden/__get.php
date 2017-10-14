<?php
class DatenContainer
 {
     protected $daten = array();

     public function __construct()
     {
         $this->daten = DBObjekt::gibEintragAssoziativZurueck();
     }

     public function __get ($eintrag)
     {
         if (!empty($this->daten[$eintrag])) {
             return $this->daten[$eintrag];
         } else {
             return NULL;
          }
     }
 }

 $datenContainer = new DatenContainer();
 var_dump($datenContainer->Vorlesung); //Ausgabe könnte hier zwischen null und einem String varieren
 ?>