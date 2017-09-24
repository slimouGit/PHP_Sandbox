<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 20.03.17
 * Time: 15:16
 */

$warenkorb = array(
    "Banana",
    "Birne",
    "Banane",
);

echo "<ul>";

foreach ($warenkorb as $key => $produkt){
    echo "<li>";
    $key++;
    echo $key . ". ";
    echo $produkt;
    echo "</li>";
}

echo "</ul>";

?>