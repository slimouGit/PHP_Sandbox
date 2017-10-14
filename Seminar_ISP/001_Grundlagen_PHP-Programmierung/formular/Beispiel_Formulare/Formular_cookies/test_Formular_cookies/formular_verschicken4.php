<?php
echo <<<EOT
<!DOCTYPE html>
    <head>
        <title>Formular</title>
            <meta charset="utf-8"/>
            <meta name="author" content="Salim Oussayfi" />
    </head>
    <body>
<h1>Daten ausgeben</h1>
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

            echo "Vorname: " . $_COOKIE["vorname"] . "<br />\r\n";
            echo "Name: " . $_COOKIE["nachname"];
        echo "Ihre Daten wurden erfolgreich unter <a href=\"$filename\">" .
            "$filename</a> gespeichert.<br/>";

            $text = file_get_contents($filename);
            print_r($text);
}
echo <<<EOT
<br>
<a href="formular_ausfuellen4.php">zurück</a>
</p>
</form>
</body>
</html>
EOT;
?>