<?php

date_default_timezone_set("Europe/Berlin");

$stunde = date("H");
    switch ($stunde) {
        case 8:
            echo "Gääähn";
            break;
        case 9:
            echo "Kaffee";
            break;
        case 10:
            echo "Uffstehe";
            break;
        default:
            echo "weiter pennen<br/>es ist erst $stunde Uhr.";
    }

?>