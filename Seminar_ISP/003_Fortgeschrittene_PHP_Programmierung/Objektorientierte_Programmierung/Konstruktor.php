<?php

class Student
{
    protected $name, $semester;

    public function __construct($name, $semester)
    {
        $this->name = $name;
        $this->semester = $semester;
    }
    /*
    public function ausgebenStudent($name, $semester)
    {
        print("Name: ");
        print($name . "<br/>");
        print("Semester: ");
        print($semester);
    }
    */
}//ENDE class Student

class VorlesungsTeilnehmer extends Student
{
    protected $vorlesung;

    public function __construct($vorlesung, $name, $semester)
    {
        $this->vorlesung = $vorlesung;
        parent::__construct($name,$semester);
    }

    /*
    public function ausgebenVorlesung($vorlesung, $name, $semester)
    {
        print("Vorlesung: ");
        print($vorlesung . "<br/>");
        print("Name: ");
        print($name . "<br/>");
        print("Semester: ");
        print($semester);
    }
    */
}//ENDE class VorlesungsTeilnehmer
/*
echo "Objekt aus Klasse:<br/>";
$student = new VorlesungsTeilnehmer();
$student->ausgebenVorlesung("Webprogrammierung", "Hans", "6");
*/
?>


