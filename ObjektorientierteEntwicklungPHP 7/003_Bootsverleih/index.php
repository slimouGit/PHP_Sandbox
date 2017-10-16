<?php
include "script/Boathire.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bootsverleih</title>
    <meta charset="utf-8">
    <style>
        h2 {margin:0px;padding-top:10px}
        #rentBoats {
            margin-top: 20px;
            padding-bottom: 20px;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>

    <div>
        <h1>Bootsverleih</h1>
        <form action="?rent=1" method = "post">
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="Boot-Nr." name="boat">
            <input type="submit" value="buchen">
        </form>
    </div>

    <div>
        <h1>Rückgabe</h1>
        <form action="?return=1" method = "post">
            <input type="text" placeholder="Boot-Nr." name="boat">
            <input type="submit" value="zurückgeben">
        </form>
    </div>

</body>
</html>

<?php

Boathire::checkFormInput();

?>
<div id="rentBoats">

    <h2>vermietete Boote:</h2>
    <?php
Boathire::printBookedBoats();
?>
</div>
