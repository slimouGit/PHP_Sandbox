<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
    <p>
        Text:  Hier teste ich 1000 Texte<br><br>
        Suchmuster:  <b>/[A-Z]?(ich)+/</b><br><br>
        Ergebnis:  Hier teste  <u>ich</u>  1000 Texte<br><br>
        Da vor dem festen Suchausdruck: <b><u>ich</u></b> kein Grossbuchstabe steht<br>
        (sondern ein Leerzeichen), wirkt sich das <span style="color: #ff0000; font-weight: bold;">?</span> mit der Option: <b>0-mal treffen</b> aus.
    </p>
</body>
</html>
<?php
$pattern = "/[A-Z]?(ich)+/";
$subject = "Hier teste ich 1000 Texte";

if(preg_match($pattern, $subject, $match)){
    print_r($match);
}else {
    echo "No matches";
}
?>