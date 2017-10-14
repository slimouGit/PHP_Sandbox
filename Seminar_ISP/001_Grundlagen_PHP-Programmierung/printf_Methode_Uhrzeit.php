<?php

date_default_timezone_set("Europe/Berlin");

$stunde = date(h);
$minute = date(i);
$sekunde = date(sa);

printf("%02d:%02d:%02d", $stunde, $minute, $sekunde);

?>