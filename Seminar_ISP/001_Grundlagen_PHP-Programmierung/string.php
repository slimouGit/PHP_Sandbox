<?php

$var = " lern ";

 $a = "Wir $var en  PHP! <br />";
 $b = "Wir ".$var."en  PHP!  <br />";
 $c = "Wir {$var}en  PHP! <br />";

 echo $a, $b, $c;
 
?>