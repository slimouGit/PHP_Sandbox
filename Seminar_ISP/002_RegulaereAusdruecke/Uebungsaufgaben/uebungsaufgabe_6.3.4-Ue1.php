<?php
$pattern_1 = "/Ha.?s/";
$pattern_2 = "/Ha.+s/";
$subject = " Hallo Mimi";
if(preg_match($pattern_1,$subject,$match)){
    print_r($match);
}   else {
    echo "No matches found";
}
?>