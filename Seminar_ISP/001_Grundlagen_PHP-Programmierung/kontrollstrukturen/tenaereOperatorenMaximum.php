<?php

function tenaereOperationMaximum($a, $b, $c) {
    $c = $a > $b ? $a : $b;
    
    /**
     * Kurzform von:
     * if ($a > $b) {
     * $c = $a;
     *    } else {
     *      $c = $b;
     * }
     */
    
    return $c;
}
$a = 7;
$b = 6;
$c;

echo tenaereOperationMaximum($a, $b, $c);



?>