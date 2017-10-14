
<?php

class SimpleClass
{}

$instanz = new SimpleClass();

$zugewiesen   =  $instanz;
$referenz     =& $instanz;

$instanz->var = '$zugewiesen wird diesen Wert haben';

$instanz = null; // $instanz und $referenz werden null

var_dump($instanz);
var_dump($referenz);
var_dump($zugewiesen);
?>
