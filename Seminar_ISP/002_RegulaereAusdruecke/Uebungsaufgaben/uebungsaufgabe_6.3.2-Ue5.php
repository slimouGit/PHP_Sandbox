<?php
$pattern = "/,.*?,/";
$replace = " ";
$subject = "Er, sein Name, ist Eric, ist 23 Jahre alt";

$new_String = preg_replace($pattern, $replace, $subject);

echo "$subject<br/><br/>";

echo "Pattern: \"/,.*?,/\"<br/><br/>";

print $new_String;

?>