<?php

class Entry
{

  public $title = "Hallo Welt";

  public function testMethod()
  {
    var_dump("testMethod() wurde ausgefuehrt");
  }
}

$entry = new Entry();

$name = "testMethod";

$entry->$name();

$entry2 = new Entry();

$entry2->title;

var_dump($entry2);


?>
