<?php

echo "<form action= ' ", $_SERVER['PHP_SELF'] ," '  method='post'>";
 for ($k = 0; $k < 5; $k++) {
     echo "$k ";
     echo "<input type='text' name='feld[",$k,"]'><br />";
 }

 echo "<input type='submit' /><br /><br />";
 var_dump($_POST);

?>