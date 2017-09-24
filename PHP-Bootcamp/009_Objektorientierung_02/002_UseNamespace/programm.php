<?php

require "./src/Blog/PostInterface.php";
require "./src/Blog/Post.php";
require "./src/Forum/Post.php";
require "./src/User/User.php";

$post = new Blog\Post();
var_dump($post);

$post2 = new Forum\Post();
var_dump($post2);

/*
function autoload($className)
{
  if (file_exists("./src/{$className}.php"))
  {
    require "./src/{$className}.php";
  }
}

spl_autoload_register("autoload");

$h = new BlogPost();
var_dump($h);
*/

?>
