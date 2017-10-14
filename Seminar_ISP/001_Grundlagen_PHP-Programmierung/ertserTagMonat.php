<?php
if(date("d", time()) == 1) {
    echo "Heute ist der Erste des Monats.";
} else {
    echo "Heute ist nicht der Erste des Monats.<br>";
}

$monatsTag = (date("d"));
echo "Heute ist der $monatsTag. Tag im Monat.<br>";

$aktuellesDatum = $date = date("d.m.Y");
echo $aktuellesDatum;
?>