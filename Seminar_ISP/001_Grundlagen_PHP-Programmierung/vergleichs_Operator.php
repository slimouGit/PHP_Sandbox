<?php

$a = "1";
$b = 1;

if($a == $b) {
    echo "Der Inhalt der beiden Variablen ist identisch<br/>";
} else {
    echo "Beide Variablen haben unterschiedlichen Inhalt<br/>";
}

if($a === $b) {
    echo "Der Typ der beiden Variablen ist identisch<br/>";
}   else {
    echo "Beide Variablen sind nicht vom gleichen Typ";
}



?>