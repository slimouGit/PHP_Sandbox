<meta charset="UTF-8"/>
<?php
$text_1 = "Fischers Fritze fischt frische Fische, frische Fische fisch Fischers Fritze";
$suchmuster_1 = '/fri|fi|isch\i/';
$suchmuster_2 = '/F{1,3}/';

if(preg_match_all($suchmuster_1, $text_1, $result_1)) {
    print_r($result_1);
}else {
    print "Nix gefunden";
}

echo "<br/><br/>";

if(preg_match_all($suchmuster_2, $text_1, $result_2)) {
    print_r($result_2);
}else {
    print "Nix gefunden";
}
?>