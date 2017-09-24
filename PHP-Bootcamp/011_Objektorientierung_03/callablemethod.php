<?php

/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 03.04.17
 * Time: 16:23
 */
class CallableEntry
{
    public function __invoke($x)
    {
        var_dump("__invoke wurde ausgefuehrt: {$x}");
    }

}

function test($fn){
    $fn();
}

$entry = new CallableEntry();
$entry("321");

test($entry);