<?php

$a = array(17, 19, 21, 5, 9, 13);
$size = sizeof($a);

//unsortiert
echo "unsortiert:<br/>";
    for ($i=0; $i < $size; $i++) {
        echo "$a[$i] ";
    }

//aufsteigend sortiert
sort($a);
echo "<br/><br/>aufsteigend sortiert:<br/>";
    for ($i=0; $i < $size; $i++) {
        echo "$a[$i] ";
    }

//absteigend sortiert
rsort($a);
echo "<br/><br/>absteigend sortiert:<br/>";
    for ($i=0; $i < $size; $i++) {
        echo "$a[$i] ";
    }
    


?>