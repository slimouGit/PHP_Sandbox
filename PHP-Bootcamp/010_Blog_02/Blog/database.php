<?php
$pdo = new PDO(
  'mysql:host=localhost;dbname=blog;charset=utf8',
  'blog',
    //mac
  'UynwcNbiXOMNwM1c'
    //pc
//    'kYhhiQoF5OWpQNSQ'
);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


?>
