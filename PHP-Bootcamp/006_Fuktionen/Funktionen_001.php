<?php

function halloWelt($vorname, $nachname){
    echo "Hallo {$vorname} {$nachname}";
}

function halloWelt2($vorname, $nachname){
    return "Hallo {$vorname} {$nachname}";
}

halloWelt("Mimi","Illmi");

echo "<br/>";

echo halloWelt2("Mimi","Illmer");

echo "<br/>";

$str = halloWelt2("Mimi","Illmer");

var_dump($str);


function add($a, $b){
    return $a + $b;
}

function mul($a, $b){
    return $a * $b;
}
echo "<br/>";
echo add(2,5);
echo "<br/>";
echo mul(2,5);
echo "<br/>";
var_dump(add(3,6));
echo "<br/>";
$add = add(2,3);
echo mul($add,2);
echo "<br/>";
var_dump(mul($add,2));
?>