<?php

class Lehrveranstaltung
{
    protected $lehrender;

    public function __construct()
    {
        $this->lehrender = "Thomaschewski";
    }
}

class Praktikum extends Lehrveranstaltung
{
    protected $name;

    public function __construct()
    {
        $this->name = "Praktikum Internetprogrammierung";
        parent::__construct();
    }
}
class PraktikumInternetProgrammierung extends Praktikum
{
    public function __construct()
    {
        $this->name = "Praktikum Internetprogrammierung";
        Lehrveranstaltung::__construct();
    }
}
?>