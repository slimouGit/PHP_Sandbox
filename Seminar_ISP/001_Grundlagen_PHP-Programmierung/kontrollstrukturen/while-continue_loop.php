<?php

/**
 * Im Beispiel werden die Zahlen 1 bis 10 ausgegeben, jedoch ohne die Zahl 7, da 
 * bei hier der Durchlauf vorzeitig abgebrochen wird und es zu keiner Ausgabe kommt.
 */
$a = 1;
while ($a < 10) {
    if ($a == 7) {
        $a++;
        continue;
    }
    echo $a++ . "<br/>";
}

?>