<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 17.02.17
 * Time: 16:21
 */

$name = false;
$zahl = 13;
$nachname = "Castorp";

if($name){
    echo "Die Variable ist true";
}else{
    echo "Die Variable ist false";
}
echo "<br/>";

if($zahl > 42){
    echo "Teil 1";
} elseif($zahl > 21) {
    echo "Teil 2";
} else {
    echo "Teil 3";
}


echo "<br/>";

if(!empty($nachname)){
    echo "Name gesetzt";
}else {
    echo "Name nicht gesetzt";
}

?>
