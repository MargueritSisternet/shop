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
"imac" => [
    "name" => "iMac",
    "price" => 80000,
    "weight" => 1000,
    "discount" => 25,
    "picture_url" => "https://www.backmarket.fr/cdn-cgi/image/format=auto,quality=75,width=640/https://d1eh9yux7w8iql.cloudfront.net/product_images/None_7c17280b-2e41-4e97-a3c4-992de937d162.jpg"
]
];

formatPrice($products["iphone"]["price"]);
formatPrice(priceExcludingVAT($products["iphone"]["price"]));
formatPrice(discountedPrice($products["iphone"]["price"], $products["iphone"]["discount"]));

formatPrice($products["ipad"]["price"]);
formatPrice(priceExcludingVAT($products["ipad"]["price"]));
formatPrice(discountedPrice($products["ipad"]["price"], $products["ipad"]["discount"]));

formatPrice($products["imac"]["price"]);
formatPrice(priceExcludingVAT($products["imac"]["price"]));
formatPrice(discountedPrice($products["imac"]["price"], $products["imac"]["discount"]));



include 'footer.php'
?>
