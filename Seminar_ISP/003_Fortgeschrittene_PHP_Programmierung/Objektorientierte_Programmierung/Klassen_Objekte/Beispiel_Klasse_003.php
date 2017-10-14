
<?php

class SimpleClass
{}

$instanz = new SimpleClass();

// dies ist auch mit einer Variablen möglich:
$klassenname = 'SimpleClass';
$instanz = new $klassenname(); // new SimpleClass()
?>
