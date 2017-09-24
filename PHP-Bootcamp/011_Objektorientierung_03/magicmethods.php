<?php

/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 03.04.17
 * Time: 16:06
 */
class Entry
{
    public function __isset($name)
    {
        if ($name=="title"){
            return true;
        }
    }

    public function __get($offset){
        return "Hallo Welt";
    }

    public function __set($name, $value)
    {
        var_dump("Setze {$name} auf {$value}");
    }


}

$entry = new Entry();
var_dump($entry->title);
var_dump(isset($entry->title));

$entry->title = "123456";