<?php
echo <<<EOT
<?xml version="1.0" encoding="ISO-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
<title>Daten sortieren</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Michael Gerbracht" />
</head>
<body>
<h1>Daten sortieren</h1>
<p>
EOT;
    $fehler = false;
    foreach ($_POST as $name => $inhalt) {
        if (empty($inhalt)) {
            echo "Das Feld $name enthält keinen Text!<br />\r\n";
            $fehler = true;
        }
    }

    if (!$fehler) {
        echo "Hallo " . $_POST["vorname"] . " " . $_POST["nachname"] .
            "!<br />\r\n<br />\r\nIhre sortierten Farben lauten:<br />\r\n";
        $farben = Array($_POST["farbe1"], $_POST["farbe2"], $_POST["farbe3"],
            $_POST["farbe4"], $_POST["farbe5"]);
        natsort($farben);
        foreach ($farben as $farbe) {
            echo "$farbe<br />\r\n";
        }
    }
echo <<<EOT
<a href="formular5.php">zurueck</a>
</p>
</form>
</body>
</html>
EOT;
?>