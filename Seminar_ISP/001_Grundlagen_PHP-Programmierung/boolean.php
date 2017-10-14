<?php
$var = (bool) "false";
 if (is_bool($var)) {
     echo "Ja, es ist ein Boolean-Typ.";
 } else {
     echo "Nein, es ist kein Boolean-Typ.";
 }
 echo " var_dump: ";
 var_dump($var);
 ?>