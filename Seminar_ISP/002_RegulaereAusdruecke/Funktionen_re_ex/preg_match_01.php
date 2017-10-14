<?php
echo ('Example 3 ');
$pattern = "/^learn[a-zA-Z0-9\s\-_]*regexp$/i";
$string = 'Learning really complicated regexp';
$found = preg_match($pattern, $string);
if ($found) {
    echo ('The pattern matches the string');
    echo ('');
} else {
    echo ('No match');
}

echo "<br/><br/>";

echo ('Example 4 ');
$pattern = "/^learn[a-zA-Z0-9\s\-_]*(com|re)[a-zA-Z0-9\s\-_]*regexp$/i";
$string = 'Learning this tutorial with replicated regexp';
$found = preg_match($pattern, $string, $results);
if ($found) {
    echo ('The pattern matches the string');
    echo ('');
    var_dump($results);
} else {
    echo ('No match');
}

echo "<br/><br/>";

echo ('Example 5 ');
$pattern = "/.*/";
$string = '
Learning regex
is as easy
as learning
...
well i don know
';
$found = preg_match_all($pattern, $string, $results);
if ($found) {
    echo ('The pattern matches the string');
    echo ('');
    var_dump($results);
} else {
    echo ('No match');
}

echo "<br/><br/>";

$line = "Vi is the greatest word processor ever created!";
   // perform a case-Insensitive search for the word "Vi"
   
   if (preg_match("/\bVi\b/i", $line, $match)) :
      print "Match found!";
      endif;
?>