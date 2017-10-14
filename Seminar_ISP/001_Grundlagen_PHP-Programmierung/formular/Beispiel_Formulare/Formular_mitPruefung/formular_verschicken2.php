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
        echo "Hallo " . $_POST["vorname"] . " " . $_POST["nachname"] . "!";
    }
    if ($Fehler) {
        echo "Mist!";
    }
echo <<<EOT
<a href="formular_ausfuellen2.php">zurück</a>
</p>
</form>
</body>
</html>
EOT;
?>