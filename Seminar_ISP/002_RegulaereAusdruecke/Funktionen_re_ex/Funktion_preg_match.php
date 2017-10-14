<?php
$text = "PHP macht  viel  Spass";
$suchmuster = '/ viel /';
if ( preg_match ($suchmuster, $text, $treffer)) {
    print_r($treffer);
    
} else {
    print "Kein Treffer";
}

echo "<br/><br/>";

$text2 = "Hier teste ich die Texte";
$suchmuster2 = '/[die]/';

echo "$text2 . <br/><br/>";

if ( preg_match ($suchmuster2, $text2, $treffer2)) {
    print_r($treffer2);
} else {
    print "Kein Treffer";
}

echo "<br/><br/>";

$suchmuster3 = '/[^die]/';
if ( preg_match_all($suchmuster3, $text2, $treffer3)) {
    print_r($treffer3);
} else {
    print "Kein Treffer";
}

echo "<br/><br/>";

$text4 = "Hier teste ich 1000 Texte";
$suchmuster4 = '/[0-9]/';

echo "$text4 . <br/><br/>";

if ( preg_match ($suchmuster4, $text4, $treffer4)) {
    print_r($treffer4);
} else {
    print "Kein Treffer";
}

echo "<br/><br/>";

if ( preg_match_all ($suchmuster4, $text4, $treffer5)) {
    print_r($treffer5);
} else {
    print "Kein Treffer";
}
?>