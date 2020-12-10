<?php
//calcular el preu del tipus d'habitació i retornar un valor numeric
//si es single el preu es 30
//si es double el preu es 50
//en cas contrari el preu es 0
//emprar la funcio strcmp vista als exercicis de classe
function typePriceCalculation($type){
  if (strcmp($type,'single') == 0){
    $preu=30;
    return $preu;
  }
  elseif (strcmp($type,'double') == 0) {
    $preu=50;
    return $preu;
  }
  else {
    $preu=0;
    return $preu;
  }
}

//calcular el preu segons el genere d'habitació i retornar un valor numeric
//si es female o male el preu es 10
//si es mixed el preu es 5
//en cas contrari el preu es 0
//emprar la funcio strcmp vista als exercicis de classe
function genderPriceCalculation($gender){
  if (strcmp($gender,'male') == 0 or strcmp($gender,'female') == 0){
    $preu=10;
    return $preu;
  }
  elseif (strcmp($gender,'mixed') == 0) {
    $preu=5;
    return $preu;
  }
  else {
    $preu=0;
    return $preu;
  }
}

//calcular el preu segons les vistes d'habitació i retornar un valor numeric
//si s'ha marcat amb vistes (yes) el preu es 15
//en cas contrari el preu es 0
//emprar la funcio strcmp vista als exercicis de classe
function viewsPriceCalculation($views){
  if (strcmp($views,'yes') == 0){
    $preu=15;
    return $preu;
  }
  else {
    $preu=0;
    return $preu;
  }
}

//calcular el preu segons els serveis d'habitació seleccionats i retornar un valor numeric
//per cada servei seleccionat el preu s'incrementa 20
//example: si s'han seleccionat 3 serveis de restauració el preu es 20 multiplicat per 3
//si no s'ha seleccionat cap el preu es 0
//emprar una de les dues funcions vistes a classe per a saber quants elements hi ha a un array
function foodServicesPriceCalculation($foodServices){
  $nombreDeServies=count($foodServices);
  if ($nombreDeServies == 5)
    return 5*20;
  elseif ($nombreDeServies == 4)
    return 4*20;
  elseif ($nombreDeServies == 3)
    return 3*20;
  elseif ($nombreDeServies == 2)
    return 2*20;
  elseif ($nombreDeServies == 1)
    return 1*20;
  else
    return 0*20 ;
}

?>
