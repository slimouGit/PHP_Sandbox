<meta charset="utf-8"/>
<?php

$text = file_get_contents("text_mit_leerzeilen.txt");

$suchmuster_1 = '/\s/';
$ersetzen_1 =  ' ' ;

$suchmuster_2 = '/ mit /';
$ersetzen_2 =  'ohne' ;


$neuerText_1 =  preg_replace ($suchmuster_1, $ersetzen_1, $text);

$neuerText_2 =  preg_replace ($suchmuster_2, $ersetzen_2, $neuerText_1);


file_put_contents("text_ohne_leerzeilen.txt", $neuerText_2);


echo "<b>\"$text\"</b> wurde in <b>\"$neuerText_2\"</b> geändert.";


?>