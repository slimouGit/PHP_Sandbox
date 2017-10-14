<!DOCTYPE html>
<html>
<head>
    <title>Gaestebuch</title>
    <meta charset="utf-8"/>
    <style>
        body{font-family:sans-serif;}
        input{display:block;}
        .datum{background-color:grey;width:50%;color:#fff;font-weight: bold;padding:5px;margin-bottom: 10px;}
        .verfasser{display:block;color:red;margin-top:15px;}
        .eintrag{display:block;width:50%;border-bottom:1px solid #000;color:black;margin-bottom: 20px;padding: 10px 0px;font-weight: normal;}
    </style>
</head>
 <h3>Bitte hinterlassen Sie eine Nachricht</h3>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <input type="text" name="name"/>
     <input type="text" name="vorname"/>
     <textarea cols=40 rows=5 name="text" wrap=virtual></textarea>
     <input type="submit" value="absenden" />
 </form>

 <?php 
    $datum = date("d. F Y H:i:s");
     $inhalt = $_POST["text"];
     $name = $_POST["name"];
     $vorname = $_POST["vorname"];
     if (isset($inhalt)) {
         $fp= fopen("texte.txt", "a");
         //fputs($fp, nl2br("- ".$datum.": ".$inhalt." von " .$name. "<br/>"));
         fputs($fp, nl2br(
         "<span class=\"datum\">" . $datum . "</span>" . 
         "<br/>". 
         "<span class=\"verfasser\">" . $vorname . " " . $name . "</span>" . 
         "<br/>" . 
         "<span class=\"eintrag\">" . $inhalt . "</span>"));
         fclose($fp);
     }

 echo "<h3>Einträge:</h3>";

 @readfile("texte.txt");
 
 ?>
 
 </html>