<meta charset="utf-8"/>
<?php
 $text = "Jörg André Meier (+#,.-)";

 # Alles finden – nur zur Kontrolle
 $such1 = '/^.*$/';
 preg_match_all($such1,   $text,   $treffer);
 print_r($treffer);
 echo "<hr \>";

 # Mit \w arbeiten
 $such2 = '/[\w\s]+/';
 preg_match_all($such2,   $text,   $treffer);
 print_r($treffer);
 echo "<hr \>";

 # Sonderzeichen einzeln angeben
 $such3  = '/[a-zäöü\s]+/i';
 preg_match_all($such3,   $text,   $treffer);
 print_r($treffer);
 echo "<hr \>";
 ?>