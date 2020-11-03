<?php

echo "<b>1. Containing the windows time of a day: Morning, Noon, Afternoon, Evening, Night</b><br>";

$time[]="Morning";
$time[]="Noon";
$time[]="Afternoon";
$time[]="Evening";
$time[]="Night";

echo "Number of elements: ".sizeof($time)."<br>";
foreach ($time as $value) {
  echo "$value<br>";
}

echo "<br>";

echo "<b>2. Containing some dishes of a restaurant: Beef with mushroom sauce, spaghetti carbonara, Spanish omelette</b><br>";

$restaurant[]="Beef with mushroom sauce";
$restaurant[]="Spaghetti carbonara";
$restaurant[]="Spanish omelette";

echo "Number of elements: ".sizeof($restaurant)."<br>";
foreach ($restaurant as $plat) {
  echo "$plat<br>";
}

echo "<br>";

echo "<b>3. Containing the times when an alarm sounds: 8, 12, 14, 16, 20</b><br>";

$alarm = array(8,12,14,16,20);

echo "Number of elements: ".sizeof($alarm)."<br>";
foreach ($alarm as $hora) {
  echo "$hora<br>";
}

echo "<br>";

echo "<b>4. Containing the list of components: PC, Mouse, Keyboard, i3core, 8GB RAM, 1TB</b><br>";

$components = array('PC','Mouse','Keyboard','i3core','8GB RAM','1TB');

echo "Number of elements: ".sizeof($components)."<br>";

foreach ($components as $individual) {
  echo "$individual<br>";
}

 ?>
