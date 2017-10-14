<!DOCTYPE html>
<html>
<head>
    <!-- css-import -->
            <link rel="stylesheet" href="layout.css" />
   </head>

<?php

class formular_Eingabe {
    public function form_field($text, $name, $value='')
     {
         echo "<div id=\"feld\">
                <div id=\"beschriftung\">$text:</div> <input type=\"text\" name=\"$name\" value=\"$value\" />
                </div>";
     }
     
     public function button_input($typ, $value)
     {
         echo  " <input type=\"$typ\" name=\"submit\" value=\"$value\" />";
     }
     
}

?>

</html>