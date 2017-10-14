<meta charset="utf-8"/>

<?php

function rgb($r, $g, $b = "Platzhalter")
 {
     echo "RGB bedeutet: $r, $g, $b.<br />";
 }
 
 echo "teilweise Übergabe:<br />";
 rgb(Rot, Grün);
 
 echo "<br />vollständige Übergabe:<br />";
 rgb( " Rot", "Grün", "Blau"); # Werte übergeben, nicht aber Variablen
 
 echo "-------------------------------------------<br/>";
 
 function cmyk($c, $m, $y, $k = "Platzhalter1")
 {
     echo "CMYK bedeutet: $c, $m, $y, $k.<br/>";
 }

echo "teileise Übergabe:<br/>";
cmyk("Cyan", "Magenta", "Yellow");

echo "<br/>vollständige Übergabe:<br/>";
cmyk("Cyan", "Magenta", "Yellow", "Black");

?>