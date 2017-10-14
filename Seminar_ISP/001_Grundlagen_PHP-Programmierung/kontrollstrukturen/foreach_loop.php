<meta charset="utf-8"/>

<?php

    $rgb = array("Rot", "Grün", "Blau");
    $cmyk = array("C" => "Cyan", "M" => "Magenta", "Y" => "Yellow", "K" => "Black");
    
    echo "RGB:<br/>";
    foreach ($rgb as $value) {
        echo "- $value<br/>";
    }
    
    echo "<br />CMYK:<br />";
    foreach  ($cmyk as $key => $value) {
        echo "- $key: $value<br/>";
    }
?>