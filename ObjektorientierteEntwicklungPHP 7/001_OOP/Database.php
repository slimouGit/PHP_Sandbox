<?php

class Database {
    const DB_TYPE = "MYSQL";
    const DB_VERSION = 5.5;
    public $connected = true;
    
    public $results = array("Peter", "Tina", "Clara");
    
    public $dbname = "";
    public $dbuser = "user_01_DB01";
    public $dbpwd = "123456";
    public $dbhost = "127.0.0.1";
    
    public $statement;
    
    public function getType(){
        //return "Typ: " . $this->type;
    }
}

$myDB = new Database();
echo "Typ: " . Database::DB_TYPE;
echo "<br>";
echo "Version: " . Database::DB_VERSION;
echo "<br>";
echo $myDB->getType();

echo "<br>";
$myDB->dbname = "MySQL-DB";
echo $myDB->dbuser;

echo "<br>";

$myDB_2 = new Database();
$myDB_2->dbuser="user_01_DB02";
echo $myDB_2->dbuser;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP classes</title>
    </head>
    <body>
        
    </body>
</html>