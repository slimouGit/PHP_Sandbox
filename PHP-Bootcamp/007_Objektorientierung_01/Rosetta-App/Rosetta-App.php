<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 30.03.17
 * Time: 14:15
 */

require "src/Data.php";

$test1 = new Data(000001, "Benzin", "Essence", "Benzina", "Benzin Motor", "Benzin", "AstraST");
$test1 -> printData();

$test2 = new Data(000002, "Motor", "Moteur", "Motore", "Benzin Motor", "Motor");
$test2 -> printData();