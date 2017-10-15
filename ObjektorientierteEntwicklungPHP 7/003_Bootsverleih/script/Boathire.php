<?php

class Boathire
{
    const hourlyRate = 4;
    public $name;
    private $boat;

    function __construct($name, $boat)
    {
        $this->name = $name;
        $this->boat = $boat;
    }

    function __destruct()
    {
        //echo "object destructed";
    }

    public function lentBoat(){
        $checkInDate = date("h:i");
        $name = $this->name;
        $boat = $this->boat;

        //echo "Boot " . $boat . " wurde um " . $checkInDate . " Uhr ausgeliehen";

        $pdo = new PDO('mysql:host=localhost;dbname=bootsverleih;charset=utf8', 'root', '');
        $res = $pdo->prepare("INSERT INTO ausleihe (name, boat, checkIn) VALUES (:name, :boat, :checkIn)");
        $res->execute(array('name' => $name, 'boat' => $boat, 'checkIn' => $checkInDate));


    }

    public static function returnBoat($boat){
        $checkOutDate = date("h:i");

        echo "Boot " . $boat . " wurde um " . $checkOutDate . " Uhr zurückgegeben<br>";

        $pdo = new PDO('mysql:host=localhost;dbname=bootsverleih;charset=utf8', 'root', '');
        $res = $pdo->prepare("UPDATE ausleihe SET checkOut = :checkOut WHERE boat = :boat");
        $res->execute(array('boat' => $boat, 'checkOut' => $checkOutDate));

        $sql = "SELECT * FROM ausleihe WHERE boat LIKE $boat";
        foreach ($pdo->query($sql) as $row) {
            echo "<br>Ausleihdaten:<br>" . "Ausgeliehen: " . $row['checkIn']." - Abgegeben: ".$row['checkOut'] ;
        }
    }
}



