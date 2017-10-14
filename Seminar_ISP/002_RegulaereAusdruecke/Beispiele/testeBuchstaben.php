<?PHP
$satz = "Dies ist der 1. Test";
$zahl = "\d";
  if (preg_match('#^[a-z]+$#i', $satz)) {
    echo 'Nur Buchstaben!';
  }
  else {
    echo 'Nicht nur Buchstaben!';
    echo "<br/>";
    echo $satz;
    preg_match ("/\d/", $satz, $hit);
    print_r ($hit);
  
  }
?>