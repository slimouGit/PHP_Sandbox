<?php

echo "Ausgabe mit \"file_get_contents(...)\":<br/>";
$text = file_get_contents("test.txt");
print_r($text);

echo "<br/><br/>Ausgabe mit \"file(...)\":<br/>";
$text = file("test.txt");
print_r($text);

echo "<br/>";

$datei = file_exists("test.txt");

if($datei == 1){
    echo "Datei existiert";
}else{
    echo "Datei existiert nicht";
}
//echo $datei;

//versucht, text3.txt zu oeffnen, falls nicht existent, wird die Datei angelegt
 fopen("text3.txt", "a");
 
 $testdatei = fopen("test.txt", "r");

echo "<br/>";

 while (!feof($testdatei)) {
     $zeile = fgets($testdatei, 1000);
     echo $zeile;
 }

 fclose($testdatei);
 
 echo "<br/>";
 
 $uebungsdatei = readfile("text2.txt");
 echo $uebungsdatei;

?>