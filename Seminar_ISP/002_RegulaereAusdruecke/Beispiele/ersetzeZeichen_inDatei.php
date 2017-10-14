<meta charset="utf-8"/>
<?php

//$text = "Mimi ist doof.";
$text = file_get_contents("text.txt");
$suchmuster = '/ doof/';
$ersetzen =  ' schlauer als alle' ;

$neuerText =  preg_replace ($suchmuster, $ersetzen, $text);

 
 
file_put_contents("text_neu.txt", $neuerText);

echo "<b>\"$text\"</b> wurde in <b>\"$neuerText\"</b> geändert.";


?>