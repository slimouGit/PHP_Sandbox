<?php

class Ohne
 {
     protected $inhalt = "InternetProgrammierung";
 }
 class Mit
 {
     protected $inhalt = "InternetProgrammierung";
     public function  __toString()
     {
         return $this->inhalt;
     }
 }

 $ohne = new Ohne();
 $mit = new Mit();
 $inhalt = string($mit);

 print($ohne);
 print($mit);
 print($inhalt);
 
?>