<?PHP

//Verbindung aufbauen
 $verbindung = mysql_connect("slimou.de.mysql", "slimou_de", "26041980");

 //Prüfung ob Verbindungsaufbau geklappt hat
 if ($verbindung) {
     echo "Verbindung hergestellt!<br />";
 } else {
     echo "Keine Verbindung zur Datenbank möglich!<br />";
     exit;
 }

 //Auswählen einer Datenbank
 $select = mysql_select_db ("slimou_de") or die ("Datenbank nicht gefunden");

 //Datensätze der Tabelle PHP der Spalten Name & MatrNr auslesen 
 $zeiger = mysql_query ("SELECT vorname, nachname FROM bedemi_data");

 if (!$zeiger) {
     die('Ungueltige Abfrage:' .mysql_error());
 }

 //Anzahl der Datensätze ermitteln
 $anzahl = mysql_num_rows ($zeiger);

 //Datensätze zeilenweise auslesen
 while (list( $name, $matr ) = mysql_fetch_row($zeiger)) {
     echo "Teilnehmer:  $name, $matr  <br />\n";
 }

 //Verbindung schließen
mysql_close ($verbindung);

?>