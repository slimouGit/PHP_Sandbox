<?php
echo <<<EOT
<!DOCTYPE html>
    <head>
        <title>Formular</title>
            <meta charset="utf-8"/>
            <meta name="author" content="Salim Oussayfi" />
    </head>
    <body>
<h1>Beispiel Formulare</h1>
<form action="formular_verschicken_objekt.php" method="post">
<p>
EOT;
    require_once "HtmlEingabe.class.php";
    $eingabe = new HtmlEingabe();

    $eingabe->schreibeTextfeld("Vorname",  "vorname" );
    $eingabe->schreibeTextfeld("Name",  "nachname" );
    $eingabe->schreibeTextfeld("Strasse",  "strasse" );
    $eingabe->schreibeTextfeld("Nr.",  "haus_nr" );
    $eingabe->schreibeTextfeld("PLZ",  "plz" );
    $eingabe->schreibeTextfeld("Ort",  "ort" );
    
echo <<<EOT
<br />
<input type="submit" value="Formular abschicken" />
</p>
</form>
</body>
</html>
EOT;
    
?>