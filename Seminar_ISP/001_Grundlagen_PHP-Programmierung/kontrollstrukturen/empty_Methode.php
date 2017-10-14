<meta charset="utf-8"/>

<?php

$a = "test";
$b = 0;

$result1 = empty($a);
echo $result1;

$result2 = !empty($a);
echo $result2;

$result3 = empty($b);
echo $result3;

$result4 = !empty($b);
echo $result4;


echo "<br/>";

$var = 0;

// true, weil $var keinen Wert enthält
if (empty($var)) {
    echo '$var ist 0, nicht mit einem Wert belegt, oder nicht gesetzt<br/>';
}

// true, weil $var gesetzt wurde
if (isset($var)) {
    echo '$var ist gesetzt, enthält aber keinen Wert';
}

?>