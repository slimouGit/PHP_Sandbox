<!DOCTYPE html>
    <head>
        <title>Formular</title>
            <meta charset="utf-8"/>
            <meta name="author" content="Salim Oussayfi" />
    </head>
    <body>
<h1>Beispiel Formulare</h1>
<form action="formular_verschicken_objekt.php" method="post">

<?php
    require_once "formular_Eingabe.class.php";
    $eingabe = new formular_Eingabe();

    $eingabe->form_field("Vorname",  "vorname" );
    $eingabe->form_field("Name",  "nachname" );
    $eingabe->form_field("Strasse",  "strasse" );
    $eingabe->form_field("Nr.",  "haus_nr" );
    $eingabe->form_field("PLZ",  "plz" );
    $eingabe->form_field("Ort",  "ort" );
    
?>
<br />
<input type="submit" value="senden" />
</p>
</form>
</body>
</html>

