<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 19.02.2017
 * Time: 18:12
 */

$name = "Erik HALLO";

echo strtolower($name);
echo "<br/>";
echo strtoupper($name);

echo "<br/>";
echo str_replace("HALLO", "Willkommen",$name);
echo "<br/>";

$ergebnis = strpos($name, "HALLO");

if($ergebnis !== false){
    echo "Variable gesetzt";
}

var_dump($ergebnis);

?>