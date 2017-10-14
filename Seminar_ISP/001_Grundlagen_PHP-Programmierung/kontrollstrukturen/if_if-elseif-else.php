<?php
    
    function weekend($tag){
        if ($tag == 5) {
        echo "bald ist Wochenende";
    } elseif ($tag == 6 or $tag == 7) {
        echo "heute ist Wochenende";
    } else {
        echo "Arbeiten";
    }
    }
    $tag = date(N);
    echo weekend($tag);
?>