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
<div id="rentBoats">

    <h2>vermietete Boote:</h2>
    <?php
$pdo = new PDO('mysql:host=localhost;dbname=bootsverleih;charset=utf8', 'root', '');
$sql = "SELECT * FROM ausleihe WHERE checkOut like ''";
foreach ($pdo->query($sql) as $row) {
    echo "<br>Boot: " . $row['boat'] .  " ausgeliehen von: " . $row['name'] . " um " . $row['checkIn']." Uhr";
}
?>
</div>
