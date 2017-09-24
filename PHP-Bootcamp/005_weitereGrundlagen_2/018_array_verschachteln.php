<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 20.03.17
 * Time: 15:16
 */

$obst = array(
    "Birne",
    "Banane",
    "Apfel"
);

$nuss = array(
    "Walnuss",
    "Erdnuss"
);

var_dump($obst);

$produkte = array(
    "Obst" => $obst,
    "Nuss" => $nuss
);
/*
$produkte = array(
    "Nuss" => $nuss
);
*/
echo "<br/>";


var_dump($produkte);

echo "<br/>";

var_dump($produkte["Obst"][1]);


echo "<ul>";

foreach ($produkte AS $category => $items){
    echo "<li>{$category}<ul>";
    foreach ($items AS $item){
        echo "<li>{$item}</li>";
    }
    echo "</ul></li>";
}

echo "<br/>";

?>