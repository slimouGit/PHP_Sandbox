<?php

$filecontent = file_get_contents('test.txt');
$filecontent = preg_replace( ' /^\s*$/ ' ,   '' ,   $filecontent);

echo $filecontent;

?>