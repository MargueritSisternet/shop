<HTML>
<BODY>

<?php
$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 450,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://cdn-apple.com/iphone-12.jpg"
    ],
    "ipad" => [
        "name" => "iPad",
        "price" => 450,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://cdn-apple.com/ipad.jpg"
    ],
    "imac" => [
        "name" => "iMac",
        "price" => 90000,
        "weight" => 800,
        "discount" => 10,
        "picture_url" => "https://cdn-apple.com/iphone-12.jpg",
    ]
];

foreach ($products as $productid) {
    print("<H1>$productid[name]</H1><br>");
    foreach ($productid as $key => $value) {
        print("[$key] = $value");
        print("<br>");
    }
}
?>