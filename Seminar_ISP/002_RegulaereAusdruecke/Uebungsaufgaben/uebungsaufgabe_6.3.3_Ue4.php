<?php
$pattern = "/.\./";
$subject = "Zwischen 1.220 und 1.300 Euro";

if(preg_match($pattern, $subject, $match)){
    echo "Match found:<br/>";
    print_r($match);
}   else {
    echo "No match found";
}
?>