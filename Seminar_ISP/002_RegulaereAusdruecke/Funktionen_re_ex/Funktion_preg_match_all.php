<?php
 $text = "PHP macht viel Spass";
 $suchmuster = '/a/';
 if ( preg_match_all ($suchmuster, $text, $treffer)) {
    print_r($treffer);
    
    //Anzahl der Treffer ermitteln
    $anzahl=preg_match_all($suchmuster,$text);
    echo "<br/>Anzahl der Treffer: ".$anzahl;
 } else {
    print "Kein Treffer";
 }

 ?>