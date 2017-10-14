<?php
$pattern_1 = "/\s/";
$replace_1 = "_";
$subject = "In diesem Text sind Leerzeichen enthalten.";

$new_String = preg_replace($pattern_1, $replace_1, $subject);

$pattern_2 = "/sind/";
$replace_2 = "sind_KEINE";
$new_String = preg_replace($pattern_2, $replace_2, $new_String);

echo $subject;
echo "<br/><br/>";
print $new_String;
?>