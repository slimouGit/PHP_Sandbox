<?php

class Methods {
    
    function add($a, $b = 0){
        return "$a + $b = " . ($a + $b);
    }
}

$addition = new Methods();
echo $addition->add(2,5);
echo "<br>";
echo $addition->add(2);