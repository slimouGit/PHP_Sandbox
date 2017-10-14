<meta charset="UTF-8"/>

<?php

$cmyk = array("Cyan", "Magenta", "Yellow", "Black");

echo "Elementanzahl: ", count($cmyk);
echo "<br/>aktuelles Element: ", current($cmyk);
echo "<br/>naechstes Element: ", next($cmyk);
echo "<br/>naechstes Element: ", next($cmyk);
echo "<br/>letztes Element: ", end($cmyk);
echo "<br/>Groesse des Arrays: ", sizeof($cmyk);


?>