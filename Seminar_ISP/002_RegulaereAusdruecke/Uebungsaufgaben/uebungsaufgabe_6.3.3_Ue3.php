<?php
$pattern = "/\b\w+?\b/";
$subject = "Wer was macht, macht was";

if(preg_match_all($pattern,$subject,$match)){
    print_r($match);
}else {
    echo "No matches";
}
?>