<?php

$text = file_get_contents("text.txt");
$search = "Mimi";
   
   if (preg_match("/\b$search\b/i", $text, $match)){
      print "$search was found!";
   }else {
       print "$search was not found!";
   }
      
?>