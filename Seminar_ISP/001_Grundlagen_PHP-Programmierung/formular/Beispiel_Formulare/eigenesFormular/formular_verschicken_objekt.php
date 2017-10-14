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
        echo "Hallo " . $_POST["vorname"] . " " . $_POST["nachname"] . "!<br/>".
        $_POST["strasse"] . " " . $_POST["haus_nr"] . "<br/>".
        $_POST["plz"] . " " . $_POST["ort"] . "<br/>";
    }
    if ($Fehler) {
        require_once "formular_Eingabe.class.php";
        $eingabe = new formular_Eingabe();
        
        $eingabe->form_field("Vorname",  "vorname" );
        $eingabe->form_field("Name",  "nachname" );
        $eingabe->form_field("Strasse",  "strasse" );
        $eingabe->form_field("Nr.",  "haus_nr" );
        $eingabe->form_field("PLZ",  "plz" );
        $eingabe->form_field("Ort",  "ort" );
        
        
	    
	
    }
    
    /*else {
        header("Location: bestaetigung.php");
    }*/
echo <<<EOT
<a href="formular_ausfuellen_objekt.php">zurück</a>
</p>
</form>
</body>
</html>
EOT;
?>