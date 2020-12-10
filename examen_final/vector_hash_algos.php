<?php
/*
Donada la funcio de php hash_algos()
1-Mostra amb un bucle for each tots els seus elements
2- de manera ordenada alfabeticament
3- I mostra amb accés directe per posició als elements amb els valors:
    sha256
    md5
mes informació al link:
https://www.php.net/manual/en/function.hash-algos.php
......
*/

echo "<h1>Mostra amb un bucle for each tots els seus element</h1><br>";
$var1=hash_algos();

foreach ($var1 as $key) {
  echo "$key<br>";
}

echo "<h1>De manera ordenada alfabeticament</h1><br>";

asort($var1);

foreach ($var1 as $key => $value) {
  echo "$value<br>";
}

echo "<h1>Mostra amb accés directe per posició als elements amb els valors: sha256 i md5</h1><br>";

echo "$var1[5], $var1[2]";

?>
