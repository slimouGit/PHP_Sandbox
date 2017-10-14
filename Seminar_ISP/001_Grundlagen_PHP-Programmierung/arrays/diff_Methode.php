<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8"/>
  </head>  
<?php
$array1 = array("a" => "grün", "rot", "blau", "rot");
$array2 = array("b" => "grün", "gelb", "rot");
$result = array_diff($array1, $array2);
?>

<body>
    <h2>Ausgabe mit <u>array_diff</u></h2>
    <?php
        print_r($result);
    ?>

</body>


</html>
