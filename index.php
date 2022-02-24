
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP - HTML</title>
    <link rel="stylesheet" type="text/css" href="/styles/style_index.css">
   
</head>
<body>
<? include "header.php";
include "my_functions.php";
include "multidimensional-catalog.php";
require "database.php"
?>

<div class="box_bandeau_1">
     <h1>PRODUCTS</h1>   
    </div>

<?php
foreach($products as $product) {
    
    ?>
    <div class="box_bandeau_1">
    <h3><strong><?=$product["name"]?></strong></h3>
    <h4>Price : <?= formatPrice($product["price"]);?></h4>
    <h4> Price Excluding VAT : <?= formatPrice(priceExcludingVAT($product["price"]));?> </h4>
    <br>
    <h4><?="Discount : " . $product["discount"]. "%"?></h4>
    <H4><strong>Discounted Price : <?= formatPrice(discountedPrice($product["price"],$product["discount"]));?></strong></H4>
    <br>
    <h4><?="Weight : " . $product["weight"]. " g"?></h4>
    </div>
    <div class="box_bandeau_1">
    <img src= "<?=$product["picture_url"]; ?>"/>
    </div>

<?php
}
?>

</body>
<? include "footer.php";
?>
</html>