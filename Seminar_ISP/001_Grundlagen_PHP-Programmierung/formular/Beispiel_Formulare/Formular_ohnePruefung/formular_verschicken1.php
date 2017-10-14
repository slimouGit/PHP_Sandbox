<?php
echo <<<EOT
<!DOCTYPE html>
    <head>
        <title>Formular</title>
            <meta charset="utf-8"/>
            <meta name="author" content="Salim Oussayfi" />
    </head>
    <body>
<h1>Daten einlesen</h1>
<p>
EOT;
    print_r($_POST);
echo <<<EOT
</p>
</form>
</body>
</html>
EOT;
?>