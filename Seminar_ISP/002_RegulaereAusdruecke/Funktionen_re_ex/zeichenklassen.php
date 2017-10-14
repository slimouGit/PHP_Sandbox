<?php
$text_1 = "Hier teste ich 1000 Texte";
$suchmuster_1 = "/ \w\w\w\s\d\d\d\d /";
if(preg_match($suchmuster_1, $text_1, $result_1))
{
    print_r($result_1);
}else{
    print "Kein Treffer";
}

echo "<br/><br/>";

$suchmuster_2 = "/\b\w\w\w\s\d\d\d\d\b/";
if(preg_match($suchmuster_2, $text_1, $result_2))
{
    print_r($result_2);
}else{
    print "Kein Treffer";
}
?>