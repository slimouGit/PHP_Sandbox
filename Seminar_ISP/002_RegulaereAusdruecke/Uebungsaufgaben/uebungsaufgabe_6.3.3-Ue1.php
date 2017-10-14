<?php
$pattern = "/[^mas]{4}/";
$subject = "Wer was macht, macht was";

if(preg_match($pattern, $subject, $match)) {
    print_r($match);

}else {
    echo "No matches";
}

?>