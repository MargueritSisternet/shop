<!DOCTYPE html>
<html>
<body>

<?php
$products = array("iMac", "iPod", "iPhone", "iPadAir");
sort($products);

$length = count($products);
for($x = 0; $x < $length; $x++) {
  echo $products[$x];
  echo "<br>";
}
echo $products[0];
echo "<br>";
echo $products[$length - 1];

?>  