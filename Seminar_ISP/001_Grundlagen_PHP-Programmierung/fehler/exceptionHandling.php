<?php
function division($zaehler, $nenner) {
    if ($nenner == 0){
        throw new Exception("$zaehler kann nicht durch $nenner dividiert werden.");
    }
    $ergebnis = $zaehler/$nenner;
    return $ergebnis;
} 

try {
    echo division(5,0);
}
catch (Exception $fehler) {
    echo "Fehler: ".$fehler->getMessage();
}
?>