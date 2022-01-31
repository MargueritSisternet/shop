<!DOCTYPE html>
<html>
<body>

<?php
$products = array("iMac", "iPod", "iPhone", "iPadAir");
sort($products);

$length = count($products);
foreach($products as $value){
  echo $value . "<br>";
}
?>  