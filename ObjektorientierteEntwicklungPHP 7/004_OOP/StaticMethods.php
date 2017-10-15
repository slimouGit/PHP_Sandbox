<?php

class Formatter{
    //non-static function
    public function printName($forename, $lastName){
        return sprintf("Hallo %s %s", $forename, $lastName);
    }

    //static function
    public static function printNameStatic($forename, $lastName){
        return sprintf("Hallo %s %s", $forename, $lastName);
    }
}

$hans = new Formatter();
echo $hans->printName("Mimi", "Illmi");

echo "<br>";

echo Formatter::printNameStatic("Mimi", "Illmi");