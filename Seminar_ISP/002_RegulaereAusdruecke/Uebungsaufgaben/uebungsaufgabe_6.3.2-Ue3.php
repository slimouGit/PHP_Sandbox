<?php
    $subject = "Er, sein Name ist Eric, ist 23 Jahre alt";
    $pattern = "/.,.{3}/";
    $replace = " ";

    $new_String = preg_replace($pattern, $replace, $subject);

    echo "$subject<br/><br/>";

    echo "Pattern: \"/.,.{3}/\"<br/><br/>";

    print $new_String;


?>