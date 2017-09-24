<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 21.02.17
 * Time: 12:29
 */

$obst = "Ananas";

$warenkorb = array(
    "Banana",
    "Birne",
    "Banane",
    $obst,
    123
);


$index = 3;

var_dump($warenkorb);

echo "<br/>";

echo count($warenkorb);

echo "<br/>";

var_dump($warenkorb[$index]);

?>