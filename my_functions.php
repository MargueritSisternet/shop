
<?php

/* $products = [
"iphone" => [
"name" => "iPhone",
"price" => 45000
],
"ipad" => [
"name" => "iPad",
"price" => 55000
],
"imac" => [
    "name" => "iMac",
    "price" => 1450
    ],
];*/


function formatPrice($value) {
    $value = $value/100 . " euros";
    echo $value . "<br>";
    }
    
    function priceExcludingVAT($value) {
    $value = ($value - ($value*20)/100);
    return $value;
    }
    ?>


 