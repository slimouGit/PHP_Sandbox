<?php
/**
 * Dieses Vorgehen führt aber schnell zu Problemen mit mehrfach vergebenen 
 * Variablennamen, besonders bei großen Programmen. Stattdessen sollten alle Werte 
 * von außen nur als Parameter an eine Funktion übergeben werden.
 */
 
function summe()
 {
      global  $a, $b;
     $a = $a+$b;
 }

 $a = 1;
 $b = 2;
 summe();
 echo $a;

?>