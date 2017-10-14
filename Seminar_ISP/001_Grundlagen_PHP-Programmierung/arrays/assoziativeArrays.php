<?php
/* Assoziative Arrays
    * Bei assoziativen Arrays wird jedem Element ein Schlüssel zugewiesen, 
    * durch dessen Aufruf der zu diesem Schlüssel gehörige Wert ausgegeben 
    * wird.
    */
    
    //array()-Funktion:
    $name = array("Sonnenblume" => "Gelb", "Lilie" => "Rot", "Gerbera" => "Blau");

    //alternative Schreibweise:
    $name["Sonnenblume"] = "Gelb";
    $name["Lilie"] = "Rot";
    $name["Gerbera"] = "Blau";
    
    echo "wert 3:", $name["Gerbera"], "<br />";
    echo "wert 1:", $name["Sonnenblume"], "<br />";
    echo "wert 2:", $name["Lilie"];
?>