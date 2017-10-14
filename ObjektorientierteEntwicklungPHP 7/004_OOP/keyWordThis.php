<?php

/**
 * Created by PhpStorm.
 * User: salim
 * Date: 14.10.2017
 * Time: 13:03
 */
class keyWordThis
{
    const NAMEKEY = "important key";
    public $name;

    public function getName(){
        return $this->name;
    }

    public function getConst(){
        return self::NAMEKEY;
    }
}

$object = new keyWordThis();
$object->name = "Jan";

echo keyWordThis::class . "<br>";
echo keyWordThis::getConst() . "<br>";
echo $object->getName() . "<br>";

