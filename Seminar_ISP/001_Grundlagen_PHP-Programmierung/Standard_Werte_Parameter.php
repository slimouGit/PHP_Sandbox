<?php
/**
 * In PHP können Parameter einer Funktion mit Standardwerten versehen werden, was erlaubt, dass beim späteren Funktionsaufruf, diese Parameter nicht übergeben werden müssen.
 */
 
 function rgb($r, $g, $b = "keine Ahnung")
 {
     echo "RGB bedeutet: $r, $g, $b.<br />";
 }

 echo "teilweise Übergabe:<br />";
 rgb(Rot, Grün);

 echo "<br />vollständige Übergabe:<br />";
 rgb( " Rot", "Grün", "Blau"); # Werte übergeben, nicht aber Variablen


?>