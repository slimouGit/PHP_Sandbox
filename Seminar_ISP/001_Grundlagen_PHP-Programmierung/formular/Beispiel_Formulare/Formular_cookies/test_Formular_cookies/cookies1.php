<?php
echo <<<EOT
<?xml version="1.0" encoding="ISO-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
<title>Cookies</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Michael Gerbracht" />
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