<?php

include "my_functions.php";


$products = [
"iphone" => [
"name" => "iPhone",
"price" => 45000,
"weight" => 200,
"discount" => 10,
"picture_url" => "https://cdn-apple.com/iphone-12.jpg"
],
"ipad" => [
"name" => "iPad",
"price" => 55000,
"weight" => 400,
"discount" => null,
"picture_url" => "https://cdn-apple.com/ipad.jpg"
],
];

formatPrice($products["iphone"]["price"]);
formatPrice(priceExcludingVAT($products["iphone"]["price"]));

formatPrice($products["ipad"]["price"]);
formatPrice(priceExcludingVAT($products["ipad"]["price"]));

include 'footer.php'
?>
