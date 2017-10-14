<?php

/* Vergleich von Arrays
    * Arrays können miteinander verglichen werden, wobei es den Vergleich nur nach den Inhalten gibt, 
    * sowie den Vergleich danach, ob nicht nur der Inhalt sondern auch der Typ und der Schlüssel gleich ist.
    */
$a = array(1,2,3);
$b = array(1,2,"3");
$c = array("x" => 1, "y" => 2, "z" => 3);
$d = array(1,3,2);
$e = array(1,2,3);
$f = array(8,5,3);

//komplettes Array vergleichen
if ($a == $b) {
    echo '1: $a & $b haben den gleichen Inhalt!<br/>';
}
//prueft, ob alle Variablen-Typen identisch sind
if ($a === $e) {
     echo '2: $a & $e sind identisch!<br />';
 }
//Index aus zwei Arrays vergleichen
if ($a[1] == $d[2]) {
    echo "3: vergleiche Index: $a[1] & $d[2] haben den gleichen Inhalt!<br/>";
}
//
if ($a != $c) {
     echo '4: $a & $c haben NICHT den gleichen Inhalt!';
 }
 
?>