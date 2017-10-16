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
        printf("Boot %s wurd an %s verliehen", $boat, $name);
    }

    function __destruct()
    {
        //echo "object destructed";
    }

    //------------------------------------------------------------------------------------------------

    public static function checkFormInput(){
        if(isset($_GET['rent'])) {
            $name = $_POST['name'];
            $boat = $_POST['boat'];
            $loan = new Boathire($name, $boat);
            $loan->lentBoat();
        }

        if(isset($_GET['return'])) {
            $boat = $_POST['boat'];
            self::returnBoat($boat);
        }
    }

    //------------------------------------------------------------------------------------------------

    public function lentBoat(){
        $checkInDate = date("h:i");
        $name = $this->name;
        $boat = $this->boat;

        $pdo = new PDO('mysql:host=localhost;dbname=bootsverleih;charset=utf8', 'root', '');

        $res = $pdo->prepare("INSERT INTO ausleihe (name, boat, checkIn) VALUES (:name, :boat, :checkIn)");
        $res->execute(array('name' => $name, 'boat' => $boat, 'checkIn' => $checkInDate));
    }

    //------------------------------------------------------------------------------------------------

    public static function returnBoat($boat){
        $checkOutDate = date("h:i");

        $pdo = new PDO('mysql:host=localhost;dbname=bootsverleih;charset=utf8', 'root', '');

        $sql = "SELECT * FROM ausleihe WHERE boat LIKE $boat";
        foreach ($pdo->query($sql) as $row) {
            if(empty($row['checkOut'])) {
                echo "<br>Boot-Nr. " . $row['boat'] . " wurde ausgeliehen um: " . $row['checkIn'] . " - abgegeben: " . $row['checkOut'];
            }
        }

        $res = $pdo->prepare("UPDATE ausleihe SET checkOut = :checkOut WHERE boat = :boat");
        $res->execute(array('boat' => $boat, 'checkOut' => $checkOutDate));
    }

    //------------------------------------------------------------------------------------------------

    public static function printBookedBoats(){
        $pdo = new PDO('mysql:host=localhost;dbname=bootsverleih;charset=utf8', 'root', '');
        $sql = "SELECT * FROM ausleihe WHERE checkOut like ''";
        foreach ($pdo->query($sql) as $row) {
            echo "<br>Boot: " . $row['boat'] .  " ausgeliehen von: " . $row['name'] . " um " . $row['checkIn']." Uhr";
        }
    }
}



