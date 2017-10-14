<!--

Dieses Beispiel ist jedoch nur ein sehr einfaches Beispiel und hat ein paar Schwachstellen.

Die erste Schwachstelle ist die Überprüfung des MIME-Typs. Probieren Sie es selber aus:
Sie legen eine TXT-Datei an ( test.txt) und schreiben einfach „Hallo Welt!“ hinein. Anschließend benennen Sie die Dateiendung in  .jpg um. Dann laden Sie die Datei  test.jpg auf Ihrem Server hoch! Normalerweise sollte dies nicht funktionieren, jedoch liefert der Browser den MIME-Typen  image/jpeg, weil die Dateiendung  .jpg ist. Somit ist die  if-Abfrage hinfällig und eine Text-Datei anstelle eines Bildes hochgeladen worden.

Die zweite Schwachstelle ist die  copy-Funktion. Die Datei wird hier lediglich kopiert und steht bis zum Ende des PHP-Scripts im Temp-Verzeichnis zur Verfügung. Somit haben andere Scripts (oder evtl. auch andere Kunden) Zugriff auf diese Datei.

-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      <input type="file" name="datei" /><br />
      <input type="submit" value="Upload" /><br />
 </form>
 <br />

 <?php
     if (is_array($_FILES["datei"])) {
         $file_temp = $_FILES["datei"]["tmp_name"];
         $file_type = $_FILES["datei"]["type"];
         $file_name = $_FILES["datei"]["name"];
         $file_size = $_FILES["datei"]["size"];
         $file = file($file_temp);
         echo $file_type."<br />";
         if ($file_type == "image/jpeg") {
             copy($file_temp, "./upload/$file_name");
              printf("Die Datei %s wurde in Upload gestellt.<br />", $file_name);
             printf("Die Datei ist %s Bytes groß und vom Typ %s.<br />", $file_size, $file_type);
         } else {
             echo "Falscher Dateityp";
         }
     }
 ?>