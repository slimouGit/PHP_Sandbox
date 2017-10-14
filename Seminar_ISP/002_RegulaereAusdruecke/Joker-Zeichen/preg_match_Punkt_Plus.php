<?php
$pattern = "/.+1000/";
$subject = "Hier teste ich 1000  Texte";

if(preg_match($pattern, $subject, $match)){
    print_r($match);
}else {
    echo "No matches";
}
?>