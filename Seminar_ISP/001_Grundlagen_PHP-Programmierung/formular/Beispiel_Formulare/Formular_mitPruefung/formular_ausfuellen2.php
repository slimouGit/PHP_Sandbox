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
<form action="formular_verschicken2.php" method="post">
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
     * Erstellt Textfelder f�r ein Formular. Es dient als einfaches Beispiel
     * und bietet sicherlich viele Erweiterungsm�glichkeiten an.
     *
     * @param string Text  der Text der dem Benutzer angezeigt werden soll
     * @param string Name  der Name des Textfeldes
     */
    function schreibeTextfeld($Text, $Name)
    {
        echo "<label>$Text:</label> <input type=\"text\" name=\"$Name\" /><br />\r\n";
    }
?>