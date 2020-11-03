<?php

echo "<b>1. String key: January | Values: day number from 1 to 31</b><br>";

$mes['January']=array(
  1,2,3,4,5,6,7,8,9,10,
  11,12,13,14,15,16,17,18,19,20,
  21,22,23,24,25,26,27,28,29,30,
  31
);

echo "String Key: January<br>";
echo "Number of elements: ".sizeof($mes['January']).'<br>';
foreach ($mes as $dies) {
  foreach ($dies as $dia) {
    echo "$dia<br>";
  }
}

echo "<br>";

echo "<b>2. String key: Menu | Values: Beef with mushroom sauce, sapghetti carbonara, Spansih omelette</b><br>";

$menu['Menu']=array(
  'Beef with mushroom sauce',
  'Spaghetti carbonara',
  'Spanish omelette'
);

echo "String Key: Menu<br>";
echo "Number of elements: ".sizeof($menu['Menu']).'<br>';
foreach ($menu as $carta) {
  foreach ($carta as $plats) {
    echo "$plats<br>";
  }
}

echo "<br>";

echo "<b>3. String key: Alarm times | Values: 8, 12, 16, 20</b><br>";

$alarm['Alarm times']=array(8,12,14,16,20);

echo "String Key: Menu<br>";
echo "Number of elements: ".sizeof($alarm['Alarm times']).'<br>';
foreach ($alarm as $hores) {
  foreach ($hores as $hora) {
    echo "$hora<br>";
  }
}

echo "<br>";

echo "<b>4. String key: Product 123 | Values: PC, Mouse, Keyboard, i3core, 8GB RAM, 1TB</b><br>";

$components['Product 123']=array(
  'PC',
  'Mouse',
  'Keyboard',
  'i3core',
  '8GB RAM',
  '1TB'
);

echo "String Key: Menu<br>";
echo "Number of elements: ".sizeof($components['Product 123']).'<br>';
foreach ($components as $values1) {
  foreach ($values1 as $values2) {
    echo "$values2<br>";
  }
}


 ?>
