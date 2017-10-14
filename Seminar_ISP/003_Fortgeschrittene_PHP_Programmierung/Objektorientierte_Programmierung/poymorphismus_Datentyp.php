<?php
function formatierteAusgabe($variable)
{
    if (is_string($variable)) {
        print(htmlspecialchars($variable));
        echo "<br/>String";
    } elseif (is_float($variable)) {
        print(sprintf("%01.2f", $variable));
        echo "<br/>Float";
    } elseif (is_int($variable)) {
        print($variable);
        echo "<br/>Integer";
    }
}

formatierteAusgabe(15);

?>