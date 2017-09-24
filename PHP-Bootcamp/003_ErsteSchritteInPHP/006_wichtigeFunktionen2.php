<?php
/**
 * Created by PhpStorm.
 * User: salimoussayfi
 * Date: 17.02.17
 * Time: 16:04
 */

$eins = "";
$zwei = 0;
$drei = 1;
$vier;

var_dump(empty($eins));
echo "<br/>";
var_dump(empty($zwei));
echo "<br/>";
var_dump(empty($drei));
echo "<br/>";

//-----------------------------------------

var_dump(isset($eins));
echo "<br/>";
var_dump(isset($vier));
echo "<br/>";

//-----------------------------------------

unset($eins);
var_dump(isset($eins));
?>