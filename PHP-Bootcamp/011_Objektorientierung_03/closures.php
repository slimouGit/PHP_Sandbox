<?php


$test = function() {
    var_dump("test()");
};

$test();

unset($test);

$test = function() {
    var_dump("test() neu");
};

$test();

var_dump($test);

?>