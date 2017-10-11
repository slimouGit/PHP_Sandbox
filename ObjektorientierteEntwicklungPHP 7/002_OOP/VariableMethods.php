<?php

class VariableMethods {
    public function add($x,$y){
        return $x+$y;
    }
    public function sub($x,$y){
        return $x-$y;
    }
}

$object = new VariableMethods();

$calculate = "sub";

echo $object->$calculate(2,3);