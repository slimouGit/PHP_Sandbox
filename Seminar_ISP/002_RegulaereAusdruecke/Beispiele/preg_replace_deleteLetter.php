<?php
$pattern = "/\D/";
$replace = "";
$subject = "Telefon-Nummer:0163-3661400";
$new_String = preg_replace($pattern, $replace, $subject);
echo $subject . "<br/>";
print($new_String);
?>