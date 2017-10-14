<?php
echo <<<EOT
<?xml version="1.0" encoding="ISO-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
<head>
<title>Daten speichern</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Michael Gerbracht" />
</head>
<body>
<h1>Daten speichern</h1>
<p>
EOT;
    $Fehler = false;
    foreach ($_POST as $Name => $Inhalt) {
        if (empty($Inhalt)) {
            echo "Das Feld $Name enthält keinen Text!<br />\r\n";
            $Fehler = true;
        }
    }

    if (!$Fehler) {
        $filename = "daten/" . date("ymd_His") . ".txt";
        $fd = fopen($filename, "w");
        foreach ($_POST as $Name => $Inhalt) {
            fputs($fd, "$Name: $Inhalt\r\n");
        }
        fclose($fd);
        echo "Ihre Daten wurden erfolgreich unter <a href=\"$filename\">" .
            "$filename</a> gespeichert.";
    }
echo <<<EOT
</p>
</form>
</body>
</html>
EOT;
?>