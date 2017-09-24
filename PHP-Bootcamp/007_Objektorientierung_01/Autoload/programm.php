<?php

function autoload($className)
{
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}
spl_autoload_register("autoload");

$wv = new SuperCar(150);
var_dump($wv->drive("Berlin"));


?>
