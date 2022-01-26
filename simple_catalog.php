<!DOCTYPE html>
<html>
<body>

<?php
$products = array("iMac", "iPod", "iPhone", "IPadAir");
sort($products);

$clength = count($products);
for($x = 0; $x < $clength; $x++) {
  echo $products[$x];
  echo "<br>";
}
echo $products[0];
echo "<br>";
echo $products[$clength - 1];
?> 