<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 20.02.2017
 * Time: 20:55
 */

$start = 0;
$end = 100;
/*
$summe = 0;
$x = $start;

while($x <= $end){
    $summe+=$x;
    $x++;
}
echo $summe;
*/
$summe = 0;

for($x = $start; $x <= $end; $x++){
    $summe += $x;
}

echo $summe;

?>