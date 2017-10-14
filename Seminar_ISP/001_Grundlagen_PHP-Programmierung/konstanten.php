<?php

define('AUTOR', "Tomaschewski");

echo "Einfache Ausgabe: ", AUTOR, "<br/>";

if (defined('AUTOR')) {
    echo "Die Konstante AUTOR ist gesetzt.<br/>";
}   else {
    echo "Die Konstante AUTOR ist nicht gesetzt.<br/>";
}

echo "Ausgabe mittels Funktion: ", constant('AUTOR');



?>