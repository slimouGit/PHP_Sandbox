<?php

$text = file_get_contents("text.txt");
$search = "Salim";
$suchmuster = '/\bMimi\b/';
$ersetzen =  'Salim' ;
   
   if (preg_match("/\b$search\b/i", $text, $match)){
      print "$search was found!";
   }else {
       print "$search was not found!";
       $neuerText =  preg_replace ($suchmuster, $ersetzen, $text);
 
        file_put_contents("text_neu_mitSalim.txt", $neuerText);
       
   };
?>