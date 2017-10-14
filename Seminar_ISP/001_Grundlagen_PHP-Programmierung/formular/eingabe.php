

<!DOCTYPE html>
        <html>
        <head>
            <title>Formular</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="layout.css">
            
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        </head>
        <body>
            <?php
            $fehler = false;

            $vornameErr = $nameErr = $plzErr = $ortErr = "";
            $vorname = $name = $plz = $ort = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                if (empty($_POST["vorname"])) {
                $vornameErr = "Bitte den Vornamen angeben";
                $fehler = true;
                } else {
                $vorname = ($_POST["vorname"]);
                }
                
                if (empty($_POST["name"])) {
                $nameErr = "Bitte den Namen angeben";
                $fehler = true;
                } else {
                $name = ($_POST["name"]);
                }
                
                if (empty($_POST["plz"])) {
                $plzErr = "Bitte den Postleitzahl angeben";
                $fehler = true;
                } else {
                $plz = ($_POST["plz"]);
                }
                
                if (empty($_POST["ort"])) {
                $ortErr = "Bitte den Ort angeben";
                $fehler = true;
                } else {
                $ort = ($_POST["ort"]);
                }
            }
            ?>
            
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                
                <div id="feld">
                <label>Vorname*</label>
                <input name="vorname" value="<?php echo $vorname;?>">
                <span class="error"><?php echo $vornameErr;?></span>
                </div>
                
                <div id="feld">
                <label>Name*</label>
                <input name="name" value="<?php echo $name;?>">
                <span class="error"><?php echo $nameErr;?></span>
                </div>
                
                <div id="feld">
                <label>PLZ*</label>
                <input name="plz" value="<?php echo $plz;?>">
                <span class="error"><?php echo $plzErr;?></span>
                </div>
                
                <div id="feld">
                <label>Ort*</label>
                <input name="ort" value="<?php echo $ort;?>">
                <span class="error"><?php echo $ortErr;?></span>
                </div>
                
                <input type="submit" name="pruef" class="button">
            </form>
            
            
            <?php
                if(isset($_POST['pruef']) && (!$fehler)) {
                    
                    /* -------------- CSV ----------------------*/
                    $writeData=fopen("kontakt_Daten.csv","a");
                        if(!$writeData)
                            {
                            echo "Datei konnte nicht zum Schreiben geöffnet werden.";
                            exit;
                        }

                    fputs($writeData,$_POST["vorname"].";".$_POST["name"].";"
                            .$_POST["plz"].";".$_POST["ort"].";\n");

                    fclose($writeData);
                    /* -------------- CSV ----------------------*/
            ?>
            
                <div>
                    <p>Folgende Daten wurden gespeichert:</p>
                </div>
                <div id="feld">
                    <label>Vorname:</label><?php echo $plz;?>
                </div>
                <div id="feld">
                    <label>Name:</label><?php echo $ort;?>
                </div>
                <div id="feld">
                    <label>PLZ:</label><?php echo $plz;?>
                </div>
                <div id="feld">
                    <label>Ort:</label><?php echo $ort;?>
                </div>
         
            <?php
                }
            ?>
        </body>
</html>

