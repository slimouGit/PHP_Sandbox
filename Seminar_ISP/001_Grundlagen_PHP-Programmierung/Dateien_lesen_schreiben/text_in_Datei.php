<?php

$text = "Dies ist ein Text,\nund er dient nur als Beispiel.";
$text2 = "Dies ist ein weiterer Text,\nund er dient auch nur als Beispiel.";

file_put_contents("test.txt", $text);
file_put_contents("test.txt", $text2);

?>