<?php

$Ordner = "Bilder"; //Verzeichnis der Bilder festlegen
 
if($Ordnerzeiger = opendir($Ordner)) //Ordner mit Ordnerzeiger �ffnen
{   while($Bild = readdir($Ordnerzeiger)) 
    {   if(!is_dir($Bild))
        {
          $Bilder[] = $Bild;
        }
    }

  closedir($Ordnerzeiger); //Ordner mit Ordnerzeiger schlie�en
}
echo "Zufallsbild:<br>";
//Bild als HTML-Code ausgeben
echo"<img alt=\"Immer gleicher Text bei unterschiedlichen Bildern\" src=\"", 
    $Ordner,
    "/",
    $Bilder[rand(0, count($Bilder)+1)], //Counter f�r Bilder um 1 erh�hen
    "\" >";

?> 