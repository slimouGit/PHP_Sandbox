<?php
class Vorlesung
{
const dauer = 90; //vorsicht PHP 5.3
public static  $pauseDanach = 15;
public static  $pausenKlingel = "schrill";

    public function info()
    {
        print("Dauer: ");
        print(self::dauer); //Achtung kein $-Zeichen
            echo "<br/>";
        print("Pause: ");
        print( self ::$pauseDanach);
            echo "<br/>";
        print("Pausenklingel: ");
        print( self ::$pausenKlingel);
    }//ENDE public function info
}//ENDE class Vorlesung

echo "Objekt aus Klasse:<br/>";
$vorlesung = new Vorlesung();
$vorlesung->info("schrill");

echo "<br/><br/>";

//die selbe Ausgabe
print("Dauer:");
print(Vorlesung::dauer);
print("Pause:");
print(Vorlesung::$pauseDanach);
?>