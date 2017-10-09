<?php

class Convention {
    const COUNTRY = "Deutschland";
    
    public $forename = "Max";
    public $surname = "Mustermann";
    
    public function getName(){
        return $this->forename . " " . $this->surname;
    }
}

$person = new Convention();
echo Convention::COUNTRY;
echo "<br>";
echo $person->forename . " " . $person->surname;
echo "<br>";
echo $person->getName();


?>