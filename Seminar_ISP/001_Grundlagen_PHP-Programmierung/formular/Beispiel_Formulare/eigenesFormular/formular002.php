<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
<style>
.error {color: #FF0000;}

</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $vornameErr = "";
$name = $vorname = $strasse = $hausnr =$plz = $ort = $email = $website = "";

$Fehler = false;

//Eingaben werden geprueft
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   if (empty($_POST["name"])) {
     $nameErr = "Bitte den Namen angeben";
   } else {
     $name = ($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Bitte nur Buchstaben und Leerzeichen eingeben";
     }
   }
   
   if (empty($_POST["vorname"])) {
     $vornameErr = "Bitte den Vornamen angeben";
     $Fehler = true;
   } else {
     $vorname = ($_POST["vorname"]);
   }
  
   if (empty($_POST["strasse"])) {
     $strasse = "";
   } else {
     $strasse = ($_POST["strasse"]);
   }
   
   if (empty($_POST["hausnr"])) {
     $hausnr = "";
   } else {
     $hausnr = ($_POST["hausnr"]);
   }
   
   if (empty($_POST["plz"])) {
     $plz = "";
   } else {
     $plz = ($_POST["plz"]);
   }
   
   if (empty($_POST["ort"])) {
     $ort = "";
   } else {
     $ort = ($_POST["ort"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = ($_POST["email"]);
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = ($_POST["website"]);
   }

 }
?>

<h2>Kontakt</h2>

<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"> 


<?php
    require_once "formular_Eingabe.class.php";
    $eingabe = new formular_Eingabe();
    
    $eingabe->form_field("Name",  "name");?><span class="error"><?php echo $nameErr;?></span><?php
    $eingabe->form_field("Vorname",  "vorname" );?><span class="error"><?php echo $vornameErr;?></span><?php
    $eingabe->form_field("Strasse",  "strasse" );
    $eingabe->form_field("Nr.",  "hausnr" );
    $eingabe->form_field("PLZ",  "plz" );
    $eingabe->form_field("Ort",  "ort" );
    $eingabe->form_field("Email",  "email" );
    $eingabe->form_field("Website",  "website" );
    
?>
<input type="submit" name="submit" value="Submit" />

<?php

if(isset($_POST['submit']) && (!$Fehler)) {

/* -------------- CSV ----------------------*/
$writeData=fopen("kontakt_Daten.csv","a");
        if(!$writeData)
          {
            echo "Datei konnte nicht zum Schreiben geöffnet werden.";
            exit;
          }

    fputs($writeData,$_POST["name"].";".$_POST["vorname"].";"
        .$_POST["strasse"].";".$_POST["hausnr"].";"
        .$_POST["plz"].";".$_POST["ort"].";"
        .$_POST["email"].";".$_POST["website"].";\n");

        echo "Ihre Eingaben wurden gespeichert.";

    fclose($writeData);

/* -------------- AUSGABE ----------------------*/  
echo "<h2>Your Input:</h2>";

echo "Name: $name";
echo "<br/>Vorname: $vorname";
echo "<br/>Straße: $strasse";
echo "<br/>Haus-Nr.: $hausnr";
echo "<br/>PLZ: $plz";
echo "<br/>Ort: $ort";
echo "<br/>Email: $email";
echo "<br/>Website: $website";
}

/* ---------------------- CSV auslesen --------------------- */

$row = 1;
if (($handle = fopen("kontakt_Daten.csv", "r")) !== FALSE) {
    echo "<p>Meine Kontakte <br /></p>\n";
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>

</body>
</html>
