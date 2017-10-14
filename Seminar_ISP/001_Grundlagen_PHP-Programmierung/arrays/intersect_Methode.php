<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8"/>
  </head>  
<?php
$array1 = array("a" => "grün", "rot", "blau");
$array2 = array("b" => "grün", "gelb", "rot");

$ergebnis = array_intersect($array1, $array2);
?>

<body>
    <h2>Ausgabe mit <u>array_intersect</u></h2>
    <?php
        print_r($ergebnis); 
    ?>
</body>


</html>
