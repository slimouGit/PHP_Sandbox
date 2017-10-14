<?php

$text = "Er, sein Name ist Eric, ist 23 Jahre alt.";
$suchmuster = "/\W.*/";
$ersetzen = " ";

$geaenderterText =  preg_replace ($suchmuster, $ersetzen, $text);
print $geaenderterText;

?>