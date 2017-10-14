<?php

$var = "text";
 if ((string)0 == $var) {
     echo "Bedingung wird durchlaufen";
 }else {
     echo "Bedingung wird nicht durchlaufen";
 }
 
 echo "<br/>";

$var = "text";
 if (0 == $var) {
     echo "Bedingung wird durchlaufen";
 }else {
     echo "Bedingung wird nicht durchlaufen";
 }
 
 echo "<br/>";

$var = "text";
 if (0 === $var) {
     echo "Bedingung wird durchlaufen";
 }else {
     echo "Bedingung wird nicht durchlaufen";
 }

?>