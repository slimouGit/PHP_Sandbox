<?php

$pattern = "/(\w*),\s(\w*)/";
$replace = "$2 $1";
$subject = "Meier, Eric ist 23 Jahre alt";

$new_String = preg_replace($pattern, $replace, $subject);

echo "$subject<br/><br/>";

echo "Pattern: \"/(\w*),\s(\w*)/\"<br/><br/>";

echo "Replace: \"$2 $1\"<br/><br/>";

print $new_String;

?>