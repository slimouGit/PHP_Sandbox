<?php
include "script/Boathire.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bootsverleih</title>
    <meta charset="utf-8">
</head>
<body>

    <div>
        <h1>Bootsverleih</h1>
        <form action="?rent=1" method = "post">
            <input type="text" name="name">
            <input type="text" name="boat">
            <input type="submit" value="buchen">
        </form>
    </div>

    <div>
        <h1>Rückgabe</h1>
        <form action="?return=1" method = "post">
            <input type="text" name="boat">
            <input type="submit" value="zurückgeben">
        </form>
    </div>

</body>
</html>

<?php
if(isset($_GET['rent'])) {
    $name = $_POST['name'];
    $boat = $_POST['boat'];
    $loan = new Boathire($name, $boat);
    $loan->lentBoat();
}

if(isset($_GET['return'])) {
    $boat = $_POST['boat'];
    Boathire::returnBoat($boat);
}
?>
