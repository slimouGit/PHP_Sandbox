<?php
echo <<<EOT
<!DOCTYPE html>
<html>
<head>
<title>Lottozahlen-Generator</title>
</head>
<body>
<h1>Lottozahlen-Generator</h1>
<p>
EOT;
//Array wird mit den moeglichen Werten befuellt
for ($zahl = 1; $zahl <= 49; $zahl++) {
    $zahlen[] = $zahl;
}
//6 Zahlen werden gezogen
for ($anzahl = 1; $anzahl <= 6; $anzahl++) {
    $key = mt_rand(0, count($zahlen)-1);
    $gezogene_zahlen[] = $zahlen[$key];
    unset($zahlen[$key]);
    $zahlen = array_values($zahlen);
}
sort($gezogene_zahlen);
foreach ($gezogene_zahlen as $zahl) {
    echo "$zahl<br/>\r\n";
}
echo <<<EOT
</p>
</body>
</html>
EOT;
?>