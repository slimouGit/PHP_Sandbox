<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 20.02.2017
 * Time: 21:02
 */
for ($x=0;$x<=100;$x++){
    if($x==13){
       // continue;//ueberspringen
        break;//abbrechen
    }
    var_dump($x );
}

$summe = 0;
$x = 0;
while(true){
    if($summe > 500){
        break;
    }
    $x++;
    $summe+=$x;
}

echo $summe;

?>