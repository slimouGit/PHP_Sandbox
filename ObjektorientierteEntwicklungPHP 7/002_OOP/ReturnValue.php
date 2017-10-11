<?php

class ReturnValue {
    
    function add($a, $b = 0){
        return "$a + $b = " . ($a + $b);
    }
}

$addition = new ReturnValue();
$sum = $addition->add(2,5);
echo $sum;

echo "<br>";

echo 10 + $addition->add(2,5);
