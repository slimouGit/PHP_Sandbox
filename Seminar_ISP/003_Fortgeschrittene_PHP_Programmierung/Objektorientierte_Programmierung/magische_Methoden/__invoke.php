<?php
/*
Die __invoke()-Methode wird aufgerufen, wenn ein Skript versucht, ein Objekt als Funktion aufzurufen. 
*/

class CallableClass
{
 function __invoke($x)
 {
  var_dump($x);
 }
}
$obj = new CallableClass;
$obj(5);
echo "<br/>";
var_dump(is_callable($obj));

?>