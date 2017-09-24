<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 29.03.2017
 * Time: 20:29
 */
function halloWelt($name){
    $name[] = "Hans";
    $name[] = "Dieter";
    echo $name;
    var_dump($name);
}

$name = ["Max"];
halloWelt($name);
echo "<br/>";
var_dump($name);