<?php

$buch[0][0] = 'PHP 4. Die Referenz';
$buch[0][1] = 'Carl Hanser Verlag';
$buch[0][2] = 'ISBN 3-446-21687-1';
$buch[1][0] = 'PHP 4 - Grundlagen und Lösungen';
$buch[1][1] = 'Carl Hanser Verlag';
$buch[1][2] = 'ISBN 3-446-21546-1';

 for($k = 0; $k < count($buch); $k++) {

     // schlechter Stil:
     //for($i=0;  $i<=2 ; $i++)

     // guter, variabler Stil:
      $j = count($buch[$k]);
     for ($i = 0;  $i < $j ; $i++) {
         echo $buch[$k][$i]."<br />";
     }
     echo "<hr noshade= ″noshade″  />";
 }

?>