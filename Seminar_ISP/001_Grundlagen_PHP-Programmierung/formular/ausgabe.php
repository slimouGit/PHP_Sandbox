<?php
$valueOrt = $_POST["ort"];
$valuePLZ = $_POST["plz"];
?>

<!DOCTYPE html>
        <html>
        <head>
            <title>Formular</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="layout.css">
        </head>
        <body>
            <div id="feld">
            <label>PLZ:</label><?php echo $plz; ?>
            </div>
            <div id="feld">
            <label>Ort:</label><?php echo $ort; ?>
            </div>
            <a href="eingabe.php" class="eingerueckt">zurück</a>
        </body>
</html>

