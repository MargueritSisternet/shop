
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


function formatPrice($price) {
    $price_euros = $price/100 . " euros";
    echo $price_euros . "<br>";
    }
    
    function priceExcludingVAT($price) {
    $price_HT = ($price - ($price*20)/100);
    return $price_HT;
    }

    function discountedPrice($price, $discount) {
        $discounted_price = ($price - ($price*($discount))/100);
        return $discounted_price;
    }
    ?>


 