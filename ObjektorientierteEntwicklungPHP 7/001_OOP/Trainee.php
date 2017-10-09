<?php
    class Trainee{
        const POSITION = "Trainee";
        public $forename;
        public $surname;
        public $intershipLength;
        public $department;
        public $tutor;
        public $teacher;
        
        public function printTrainee(){
            return $this->forename . " " . $this->surname;
        }
    }
    
    $fritz = new Trainee();
    echo Trainee::POSITION;
    $fritz->forename = "Fritz";
    $fritz->surname = "Baum";
    $fritz->intershipLength = 10;
    $fritz->department = "Sale";
    $fritz->tutor = "Meyer";
    $fritz->teacher = "Krone";
    
    echo $fritz->printTrainee();
    