<?php


abstract class DB{
    abstract public function connect();

    public function getItem(){
        return "SELECT * FROM items";
    }

    public function insertItem(){
        return "INSERT ....";
    }
}

class MySQLDB extends DB{
    public function connect()
    {
        echo "Verbindung aufgebaut";
    }
}

$connection = new MySQLDB();
$connection->connect();
echo "<br>";
echo $connection->getItem();
echo "<br>";
echo $connection->insertItem();
