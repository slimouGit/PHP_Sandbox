<?php
echo <<<EOT
<?xml version="1.0" encoding="ISO-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
<title>Formular</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Michael Gerbracht" />
</head>
<body>
<h1>Beispiel Formulare</h1>
<form action="formular_verschicken5.php" method="post">
<p>
EOT;
    schreibeTextfeld("Vorname", "vorname");
    schreibeTextfeld("Name",    "nachname");
    echo "<br />\r\n";
    schreibeTextfeld("Farbe1",    "farbe1");
    schreibeTextfeld("Farbe2",    "farbe2");
    schreibeTextfeld("Farbe3",    "farbe3");
    schreibeTextfeld("Farbe4",    "farbe4");
    schreibeTextfeld("Farbe5",    "farbe5");
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
        echo "$Text: <input type=\"text\" name=\"$Name\" /><br />\r\n";
    }
?>