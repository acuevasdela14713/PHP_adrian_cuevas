<?php
//visusi corections - OK
//Funcio 1
function email_validacio($valor){
  return filter_var($valor,FILTER_VALIDATE_EMAIL);
}


if (!email_validacio("adrian@cuevas.com")) {
  echo "email erroni";
}

echo "<br><br>";

//Funcio 2
function passwordvalidation($valor1,$valor2){
  if (strcmp($valor1,$valor2) == 0)
    return true;
  return false;
}

if (!passwordvalidation("Hola", "hola")) {
  echo "no són iguals <br><br>";
}

?>
