<?php
 $text = "PHP macht  viel  Spass";
 $suchmuster = '/ viel /';
 $ersetzen =  'mir' ;
 
 
 $neuerText_1 =  preg_replace ($suchmuster, $ersetzen, $text);
 print $neuerText_1;
 
 echo "<br/><br/>";
 
 $neuerText_2=preg_replace("/H/","M","Haus");
 print $neuerText_2;
 
 echo "<br/><br/>";
 
 $neuerText_3=preg_replace("/viel/", "mir", "PHP macht  viel  Spass");
 print $neuerText_3;
 
 echo "<br/><br/>";
 
 $neuerText_4=preg_replace("/viel/", "mir", "$text");
 print $neuerText_4;
 ?>
 
