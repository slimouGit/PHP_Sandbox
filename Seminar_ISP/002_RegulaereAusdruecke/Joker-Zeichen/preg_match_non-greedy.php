<?php
 $pattern = "/.*?t/";
 $subject = "vorname;  name; strasse; ort";

if(preg_match($pattern, $subject, $match)){
    print_r($match);
}else {
    echo "No matches";
}
?>