<?php
    class Trainee{
        const POSITION = "Trainee";
        public $forename;
        public $surname;
        public $intershipLength;
        public $department;
        public $tutor;
        public $teacher;
        
        public function printNameTrainee(){
            return $this->forename . " " . $this->surname;
        }
        
        public function printTrainee(){
            return $this->forename . " " . $this->surname . "<br>" . "Abteilung: " . $this->department . ", Dauer: " . $this->intershipLength . " Wochen" . "<br>" . "Tutor: " . $this->tutor . ", Lehrer: " . $this->teacher;
        }
    }
    echo Trainee::POSITION;
    echo "<br>";
    
    $fritz = new Trainee();
    
    $fritz->forename = "Fritz";
    $fritz->surname = "Baum";
    $fritz->intershipLength = 10;
    $fritz->department = "Sale";
    $fritz->tutor = "Meyer";
    $fritz->teacher = "Krone";
    
    echo $fritz->printNameTrainee();
    echo $fritz->printTrainee();
    