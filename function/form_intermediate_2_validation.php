<?php
//Funcio 1
$nom="Adrian Cuevas de la Cruz";
function fullNameSplit($nom){
  $separat=explode(" ",$nom);
  return $separat;
}
$solucio=fullNameSplit($nom);
foreach ($solucio as $hola) {
  echo "$hola<br>";
}

//Funcio 2
$contrassenya="Hola";

function passwordHash($contrassenya){
  $encriptada=password_hash("$contrassenya",PASSWORD_DEFAULT);
  return $encriptada;
}
$password=passwordHash($contrassenya);
echo "$password";

?>
