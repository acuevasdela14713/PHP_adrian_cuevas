<?php

if ($_GET) {
  $nom="$_GET[nom]";
  $correu="$_GET[correu]";
  $genere="$_GET[genere]";
  $permisos="$_GET[permisos]";
  $contrassenya="$_GET[contrassenya]";
  $data="$_GET[data]";
  $comentari="$_GET[comentari]";
  $curs="$_GET[curs]";
}

?>

<HTML>
<head>
    <title>Forms_PHP_exercises_2</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
      Nom<br>
      <input type="text" name="nom" value="<?php if(isset($nom)){echo $nom;}?>"><br>
      Correu electrònic<br>
      <input type="text" name="<?php if(isset($nom)){echo $correu;}?>"><br>
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
if (isset($nom)) {
  echo "$nom<br>";
}
if (isset($correu)) {
  echo "$correu<br>";
}
if (isset($genere)) {
  echo "$genere<br>";
}
if (isset($permisos)) {
  echo "$permisos<br>";
}
if (isset($contrassenya)) {
  echo "$contrassenya<br>";
}
if (isset($data)) {
  echo "$data<br>";
}
if (isset($comentrari)) {
  echo "$comentari<br>";
}
if (isset($curs)) {
  echo "$curs";
}

?>
