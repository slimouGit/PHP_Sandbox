<?php

function autoload($classname){
    if(file_exists("src/{$classname}.php")){
        require "src/{$classname}.php";
    }
}
spl_autoload_register("autoload");


$miete = new Position("Miete", 800);
$miete -> deactivatePostion();
$miete ->printPosition();

$miete = new Ausgabe("Miete", 800);
$miete ->printPosition();

$gehalt = new Einnahme("Gehalt", 58540);
$gehalt ->printPosition();


$strom = new Einnahme("Strom", 55);
$strom ->printPosition();
$strom ->switchArtPosition();
$strom ->printPosition();


?>