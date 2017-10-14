<?php

$pattern    = '%^(0?[1-9]|[12][0-9]|3[01])[- /.](0?[1-9]|1[012])[- /.](19|20)?[\d]{2}$%';

$subject    = '18.11.2015';

    if (preg_match($pattern, $subject))
    { 
        echo "OK, $subject passt";
    } else {
        echo "Fehler, $subject passt nicht";
    }
?>