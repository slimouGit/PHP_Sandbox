<?php
$pattern = " /^\S+@\S+\.[A-Z]{2,6}$/i ";
$subject = "smartillmer@gmail.com";

if(preg_match($pattern, $subject)){
    echo "$subject ist eine korrekte Email-Adresse.";
}else {
    echo "$subject ist keine korrekte Email-Adresse.";
}

?>