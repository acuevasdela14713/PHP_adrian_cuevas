<?php

$genere="$_GET[genere]";
$permisos="$_GET[permisos]";
$contrassenya="$_GET[contrassenya]";
$data="$_GET[data]";
$comentari="$_GET[comentari]";
$curs="$_GET[curs]";

?>

<HTML>
<head>
    <title>Forms_PHP_exercises_2</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
      Seleccioni el seu gènere<br>
      <input type="radio" name="genere" value="Home">Home
      <input type="radio" name="genere" value="Dona">Dona
      <input type="radio" name="genere" value="Altre">Altre<br>
      Acepta els permisos
      <input type="checkbox" name="permisos" value="D'acord"><br>
      Introdueix la teva contrassenya<br>
      <input type="password" name="contrassenya"><br>
      Data de neixament<br>
      <input type="date" name="data"><br>
      Afegeix un comentari<br>
      <textarea name="comentari" rows="5" cols="50"></textarea><br>
      Selecciona el curs que estas cursant<br>
      <select name="curs">
        <option style="display:none">
        <option value="DAW">DAW</option>
        <option value="ASIX">ASIX</option>
      </select><br>
      <input type="submit" value="Envia">
    </form>
</body>
</HTML>

<?php

echo "$genere<br>";
echo "$permisos<br>";
echo "$contrassenya<br>";
echo "$data<br>";
echo "$comentari<br>";
echo "$curs";

?>
