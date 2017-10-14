<?php
/*  Indizierte Arrays
    * Bei indizierten Arrays wird jedem Element ein Index zugewiesen
    * Entweder kann dies mit der Externer Linkarray()-Funktion geschehen 
    * oder mit der direkten Index-Angabe, die angibt, wo der Wert 
    * platziert werden soll.
*/

// automatische Indexzuweisung mittels array()-Funktion:
 $name_1 = array("Peter", "Helmut Georg", "Jürgen");

 // automatische Indexzuweisung – alternative Schreibweise
 $name_2[] = "Peter";
 $name_2[] = "Helmut";
 $name_2[] = "Jürgen";

 //manuelle Indexzuweisung:
 $name_3[0] = "Peter";
 $name_3[1] = "Helmut";
 $name_3[2] = "Jürgen";

//Indizierte Arrays ausgeben
echo "name_1 2: $name_1[1]<br />";
echo "name_2 2: $name_2[1]<br />";
echo "name_2 1: $name_2[0]<br />";
echo "name_2 3: $name_2[2]<br />";
echo "name_3 1: $name_2[0]<br />";
echo var_dump($name_1);
?>