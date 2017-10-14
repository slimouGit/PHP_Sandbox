<?php
session_start();
    echo "Der letzte Reload war am: ";
    if (empty($_SESSION["zeit"])) {
        echo "Noch nie!";
    } else {
        echo date("d.m.Y H:i:s", $_SESSION["zeit"]) . " Uhr";
    }
    echo "<br />Warten Sie kurz und drücken dann die F5-Taste!";
    $_SESSION["zeit"] = time();

?>