<?php
/**
 * Exceptionhandling in PHP 5:
    Fehler können mit einem  try-Block, abgefangen werden. Hierzu ist der Code, in
    dem ein Fehler auftreten könnte, in den Block hineinzuschreiben. Falls nun ein
    Fehler auftritt, wird ein Objekt durch die Anweisung  throw erzeugt. Bei einem
    Fehler wird der Code im  catch-Block ausgeführt.
    
    Wenn man verschiedene Arten von Fehlern behandeln will, sollte man mit mehreren
    Fehlerklassen arbeiten, die aus der Fehlerklasse  Exception abgeleitet werden.
    Diese Klassen benötigen einen Konstruktor, damit die Fehlermeldung abgefangen
    werden kann.
    */
    
    function division($zaehler, $nenner)
 {
     if ($nenner == 0) {
          throw new Exception ("Es kann nicht durch 0 dividiert werden!");
     }
     $ergebnis = $zaehler/$nenner;
     return $ergebnis;
 }

 try  {
     echo division(5, 0);
 }
 catch  (Exception $fehler) {
     echo "Fehler: ".$fehler->getMessage();
 }

?>