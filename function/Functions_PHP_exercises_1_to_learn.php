<?php
//Funció per sumar
function suma($valor1, $valor2) {
    return ($valor1 + $valor2);
}
echo "Demostració funció suma<br>";
echo suma(4, 6)."<br><br>";

//Funció per restar
function resta($valor1,$valor2) {
  return ($valor1 - $valor2);
}
echo "Demostració funció resta<br>";
echo resta(5,6)."<br><br>";

//Funció per multiplicar
function multiplicacio($valor1,$valor2) {
  return ($valor1 * $valor2);
}
echo "Demostració funció multiplicacio<br>";
echo multiplicacio(5,89)."<br><br>";

//Funció per dividir
function dividir($valor1,$valor2) {
  return ($valor1 / $valor2);
}
echo "Demostració funció dividir<br>";
echo dividir(124,2)."<br><br>";

//Exemple funció interna
$exemple = 'Adria';
echo ("La codificació md5 de $exemple és:<br>");
echo md5($exemple);

?>
