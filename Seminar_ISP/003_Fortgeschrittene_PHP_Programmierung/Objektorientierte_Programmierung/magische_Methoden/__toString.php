<?php
/*
Die __toString() Methode erlaubt einer Klasse zu entscheiden, wie sie reagieren soll, wenn sie in eine Zeichenkette umgewandelt wird. 
Die beeinflusst beispielsweise, was echo $obj; ausgeben wird. Diese Methode muss eine Zeichenkette zurückgeben, ansonsten wird ein E_RECOVERABLE_ERROR geworfen.
*/

// Deklariere eine einfache Klasse
class TestClass
{
 public $foo;

 public function __construct($foo)
 {
  $this->foo = $foo;
 }

 public function __toString()
 {
  return $this->foo;
 }
}

$class = new TestClass('Hallo');
echo $class;
?>
