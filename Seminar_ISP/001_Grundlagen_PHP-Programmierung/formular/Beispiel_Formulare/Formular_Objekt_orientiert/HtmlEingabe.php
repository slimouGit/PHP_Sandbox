<?php

require_once "HtmlEingabe.class.php";
 $eingabe = new HtmlEingabe();

 $eingabe->schreibeTextfeld("Vorname",  "vorname" );
 $eingabe->schreibeTextfeld("Name",  "nachname" );
 echo "<br />\r\n";
 $eingabe->schreibeButton("submit", "Formular abschicken");

?>