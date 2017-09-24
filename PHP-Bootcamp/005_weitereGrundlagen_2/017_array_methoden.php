<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 20.03.17
 * Time: 15:16
 */

$staedte = array(
    "Berlin" => 2800000,
    "Frankfurt" => 800000,
    "London" => 5000000,
);

var_dump(isset($staedte));
var_dump(isset($staedte["Berlin"]));
var_dump(empty($staedte));



$staedte["Kassel"] = 200000;

echo "<ul>";

foreach ($staedte as $key => $value){
    echo "<li> {$key}: {$value}</li>";
}

echo "</ul>";

unset($staedte["Kassel"]);

foreach ($staedte as $key => $value){
    echo "<li> {$key}: {$value}</li>";
}

?>