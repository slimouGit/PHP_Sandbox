<?php

$text = "Ich  habe  zu viele  Leerzeichen.";
$suchmuster = "\s";
$ersetzen = "\s";

$neuerText =  preg_replace ($suchmuster, $ersetzen, $text);
print $neuerText;


?>