<HTML>
<BODY>

<?php
$iPhone = [
"name" => "iPhone",
"price" => 45000,
"weight" => 200,
"discount" => 10,
"picture_url" => "https://cdn-apple.com/iphone-12.jpg",
];
$iPad = [
"name" => "iPad",
"price" => 20000,
"weight" => 250,
"discount" => 10,
"picture_url" => "https://cdn-apple.com/ipad.jpg",
];

$iMac = [
"name" => "iMac",
"price" => 90000,
"weight" => 800,
"discount" => 10,
"picture_url" => "https://cdn-apple.com/iphone-12.jpg",
];

$strArray = ["iPhone", "iPad", "iMac"];
foreach ($strArray as $product) {
    print("<H1>$product</H1><br>");
    foreach ($$product as $key => $value) {
        print("[$key] = $value");
        print("<br>");
    }
}
?>
</HTML>
</BODY> 