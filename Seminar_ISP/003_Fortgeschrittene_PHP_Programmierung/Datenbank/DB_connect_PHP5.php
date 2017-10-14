<?php
//Verbindung aufbauen. Das Übergeben der Datenbank ist optional.
 $verbindung = new MySQLi("slimou.de.mysql", "slimou_de", "26041980", "slimou_de");

 //Prüfung ob Verbindungsaufbau geklappt hat
 if (mysqli_connect_error()) {
      die("Keine Verbindung zur Datenbank möglich!<br />Fehler: ".mysqli_connect_error());
 }

 //Datensätze der Tabelle PHP der Spalten Name & MatrNr auslesen 
 $zeiger = $verbindung->query("SELECT vorname, nachname FROM bedemi_data");

 //Anzahl der Datensätze ermitteln
 $anzahl = $zeiger->num_rows;
 echo $anzahl . " Teilnehmer gesamt<br/>";
 
 //Datensätze zeilenweise auslesen
 while (list($name, $matr) = $zeiger->fetch_row()) { 
     echo "Teilnehmer: $name, $matr<br />\n";
 }

 //Verbindung schließen
 $verbindung->close();
?>