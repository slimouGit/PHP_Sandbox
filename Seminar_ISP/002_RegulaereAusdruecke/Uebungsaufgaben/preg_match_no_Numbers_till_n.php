<?php
$pattern = "/\D.{5}/";
$subject = "Zwischen 1.220 und 1.300 Euro";
if(preg_match($pattern, $subject, $match)){
    echo "Matches found";
    print_r($match);
}   else {
    echo "No matches found";
}
?>