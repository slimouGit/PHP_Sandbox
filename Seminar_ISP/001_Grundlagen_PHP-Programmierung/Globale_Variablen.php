<?php
/**
 * Variablen haben in PHP grundsätzlich einen lokalen Gültigkeitsbereich. Mit dem Schlüsselwort  global werden Variablen innerhalb einer Funktion als nicht-lokal, sondern als programmweit gültig markiert.
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
 
 //----------------------------------------------------------------
 echo "<br/>";
  //----------------------------------------------------------------
 
 /**
  * Dieses Vorgehen führt aber schnell zu Problemen mit mehrfach vergebenen Variablennamen, besonders bei großen Programmen. Stattdessen sollten alle Werte von außen nur als Parameter an eine Funktion übergeben werden.
  */
  
  function summe_Parameter( $aS, $bS )
 {
     $cS = $aS+$bS;
     return $cS;
 }

 $c = 1;
 $d = 2;
 echo summe_Parameter( $c, $d );
 
  //----------------------------------------------------------------
 echo "<br/>";
  //----------------------------------------------------------------
  
  /**
   * Wenn innerhalb einer  function eine Variable nur einmal initialisiert werden soll, so kann dies mit  static erfolgen.
   */
   
   function mehrfachDurchlauf()
 {
      static  $a = 0;
     echo $a;
     $a++;
     echo "<br/>" . $a;
 }
 echo mehrfachDurchlauf();
?>