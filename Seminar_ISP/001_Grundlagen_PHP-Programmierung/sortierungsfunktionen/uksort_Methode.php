<?php
    function cmp($a, $b)
    {
        if ($b == $a) return 0;
        if ($b > $a) return 1;
        if ($b < $a) return -1;
    }

    $zahlen = array(4 => "vier", 3 => "drei", 20 => "zwanzig", 10 => "zehn");
    uksort ($zahlen, "cmp");

    var_dump($zahlen);
    echo "<br/>";

    while (list($key, $value) = each($zahlen)) {
        echo "$key: $value<br/>";
    }
?>