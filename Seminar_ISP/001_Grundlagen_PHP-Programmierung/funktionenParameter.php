<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
        </head>
        <body>
        <?php
        /**
        * Schreibt Eigenschaften
        */
        function schreibeEigenschaften($objekt, $farbe, $groesse)
        {
            echo "Das $objekt ist $farbe und $groesse!";
        }

        schreibeEigenschaften("Haus", "grün", "sehr groß");
        ?>
        </body>
</html>