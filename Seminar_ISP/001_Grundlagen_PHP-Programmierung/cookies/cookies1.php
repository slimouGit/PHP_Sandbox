<?php
echo <<<EOT
<!DOCTYPE html>
    <head>
        <title>Formular</title>
            <meta charset="utf-8"/>
            <meta name="author" content="Salim Oussayfi" />
    </head>
    <body>
<h1>Beispiel Cookies</h1>
<form action="cookies2.php" method="post">
<p>
EOT;
    schreibeTextfeld("Vorname", "vorname");
    schreibeTextfeld("Name",    "nachname");
echo <<<EOT
<br />
<input type="submit" value="Formular abschicken" />
</p>
</form>
</body>
</html>
EOT;
    /**
     * Erstellt Textfelder
     *
     * Erstellt Textfelder für ein Formular. Es dient als einfaches Beispiel
     * und bietet sicherlich viele Erweiterungsmöglichkeiten an.
     *
     * @param string Text  der Text der dem Benutzer angezeigt werden soll
     * @param string Name  der Name des Textfeldes
     */
    function schreibeTextfeld($Text, $Name)
    {
        echo "$Text: <input type=\"text\" name=\"$Name\" /><br />\r\n";
    }
?>