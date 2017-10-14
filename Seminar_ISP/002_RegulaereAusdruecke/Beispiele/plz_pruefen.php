<?php

$pattern    = '#^[0-9]{5}$#';
$subject    = '23936';

if (preg_match($pattern , $subject))
    { 
        echo "OK, $subject passt";
    } else {
        echo "Fehler, $subject passt nicht";
    }

?>