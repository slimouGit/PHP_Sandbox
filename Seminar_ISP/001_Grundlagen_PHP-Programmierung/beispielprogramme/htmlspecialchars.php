
 <!DOCTYPE html>
 <html>
 <head><title>Variablen</title></head>
 <body>
 <pre>
 <?php
     $filearray = file(basename("lottozahlen.php"));
     while (list($line, $data) = each($filearray)) {
         printf("<b>%4d</b>: %s", $line, htmlspecialchars ($data));
     }
 ?>
 </pre>
 </body>
 </html>