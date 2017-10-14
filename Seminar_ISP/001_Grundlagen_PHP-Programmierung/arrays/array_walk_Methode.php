<meta charset="UTF-8"/>

<?php

function printarray($datenfeld)
    {
        echo "Blume: $datenfeld[0] $datenfeld[1], Bewertung: $datenfeld[2]<br/>";
    }

$blume = array(
    "Yellow" => array("Gelbe", "Sonnenblume", "teuer"),
    "Red" => array("Rote", "Lilie", "teuer"),
    "Blue" => array("Blaue", "Gerbera", "nicht schön")
    );

array_walk($blume, "printarray");


function kontakteArray($daten)
    {
        echo "<br/>" . "Vorname: ". $daten[0] . "<br/>" . "Name: " . $daten[1] . "<br/>" . "Email: " . $daten[2]."<br/>";
    }
    
$kontakte = array(
    "Mimi" => array("Michaela", "Illmer", "smartillmer@gmail.com"),
    "Salim" => array("Salim", "Oussayfi", "box@slimou.de")
    );
    
array_walk($kontakte, "kontakteArray");


?>