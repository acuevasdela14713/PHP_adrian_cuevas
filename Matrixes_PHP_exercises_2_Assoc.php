<?php

$dies_31=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$dies_28=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28);
$dies_30=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);

echo "<b>Matrius associatives</b><br><br>";

$calendari2['January']=$dies_31;
$calendari2['February']=$dies_28;
$calendari2['March']=$dies_31;
$calendari2['April']=$dies_30;
$calendari2['May']=$dies_31;
$calendari2['June']=$dies_30;
$calendari2['July']=$dies_31;
$calendari2['August']=$dies_31;
$calendari2['September']=$dies_30;
$calendari2['October']=$dies_31;
$calendari2['November']=$dies_30;
$calendari2['December']=$dies_31;

foreach ($calendari2 as $mesos => $mes) {
  echo "$mesos ";
  foreach ($mes as $dies) {
    echo "$dies ";
  }
  echo "<br><br>";
}




 ?>
