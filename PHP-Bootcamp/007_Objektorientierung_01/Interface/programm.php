<?php

function autoload($className)
{
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}
spl_autoload_register("autoload");


function drive(DriveInterface $obj)
{
  return $obj->drive("Berlin");
}

function colorize(DriveInterface $obj)
{
  return $obj->colorize("Blau");
}

$wv = new Bicycle();
var_dump(drive($wv));

$airbus = new Airplane();
var_dump(drive($airbus));
var_dump(colorize($airbus));


?>
