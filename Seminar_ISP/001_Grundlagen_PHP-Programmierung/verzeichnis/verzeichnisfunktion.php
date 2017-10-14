<meta charset="utf-8"/>

<?php

$verz =  opendir ('F:\xampp\htdocs\Workspace_ISP_PHP');
while ($file =  readdir ($verz)) {
    echo "$file\n";
}
closedir ($verz);

?>