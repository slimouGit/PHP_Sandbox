<!DOCTYPE html>
<html>
<head>
    <!-- css-import 
            <link rel="stylesheet" href="layout.css" />-->
    <style>
            label {width: 200px;}
            #feld {width: 500px; background-color: #ddd;}
            #beschriftung {width: 100px; float: left;}
            input {margin-left: 0px;background-color:none;}
            submit {margin-left: 50px;}
    </style>
</head>
</html>
<?php

class HtmlEingabe {
    public function schreibeTextfeld($text, $name)
     {
         echo "<div id=\"feld\">
                <div id=\"beschriftung\">$text:</div> <input type=\"text\" name=\"$name\" />
                <span id=\"error\">$error</span>
                </div>";
     }
     
     public function schreibeButton($typ, $value)
     {
         echo  " <input type=\"$typ\" class=\"button\" value=\"$value\" />";
     }
     
}

?>