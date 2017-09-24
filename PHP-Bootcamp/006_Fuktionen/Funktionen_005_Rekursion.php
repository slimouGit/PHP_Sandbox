<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 29.03.2017
 * Time: 20:49
 */

function hallo($name){
    var_dump($name);
}

function welt(){
    hallo("welt");
}

welt();

echo "<br/>";

function summe($x){
    if($x==0){
        return 0;
    }
    var_dump($x);
    return summe($x - 1)+$x;
}


echo summe(5);