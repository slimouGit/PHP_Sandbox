<meta charset="utf-8"/>

<?php
$Fehler = false;
foreach ($_POST as $Name => $Inhalt) {
    if (empty($Inhalt)) {
        echo "Das Feld $Name enth�lt keinen Text!<br />\r\n";
        $Fehler = true;
    }
}
if (!$Fehler) {
    setcookie("vorname", $_POST["vorname"]);
    setcookie("nachname", $_POST["nachname"]);
}
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
<p>
Die Daten wurden nun als Cookie an Ihren Browser �bermittelt. Klicken Sie
<a href="formular_verschicken4.php">hier</a>, um die Daten anzuzeigen.
</p>
</body>
</html>
EOT;
?>