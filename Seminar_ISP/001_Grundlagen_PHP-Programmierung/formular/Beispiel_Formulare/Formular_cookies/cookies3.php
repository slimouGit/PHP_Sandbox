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
<p>
Ihr Browser lieferte folgende Daten:<br />
EOT;
echo "Vorname: " . $_COOKIE["vorname"] . "<br />\r\n";
echo "Name: " . $_COOKIE["nachname"];
echo <<<EOT
</p>
</body>
</html>
EOT;
?>