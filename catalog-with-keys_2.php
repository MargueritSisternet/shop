
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>

       <link rel="stylesheet" href="styles/style_index.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Righteous&display=swap"
      rel="stylesheet" type="text/css">
   </head>
   <body>
       

    <?php
        $iphone = [
        "name" => "iPhone",
        "price" => 45000,
        "weight" => 200,
        "discount" => 10,
        "picture\_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-purple-select-2021?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1617130317000",
        ];
        $ipad = [
        "name" => "iPad",
        "price" => 20000,
        "weight" => 250,
        "discount" => 10,
        "picture\_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-air-select-cell-spacegray-202009_FMT_WHH?wid=1000&hei=1000&fmt=jpeg&qlt=95&.v=1598653763000",
        ];
        $imac = [
        "name" => "iMac",
        "price" => 90000,
        "weight" => 800,
        "discount" => 10,
        "picture\_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/imac-og-202008?wid=600&hei=315&fmt=jpeg&qlt=95&.v=1594849639000",
        ];
    ?>
    <div class="onverra" style="display: inline">
     <h1>PRODUCTS</h1>   
    <img src="ipad.jpg" height="40%" width="40%">
    </div> 
    
     <?php   
        echo "<H1>\"${ipad["name"]}\"</H1>";
        echo "<br>";
        echo 'Price :'. $ipad["price"];
        echo "<br>";
        echo 'weight :'. $ipad["weight"];
        echo "<br>";
        echo 'discount :' . $ipad["discount"];
        echo "<img src=\"${ipad["picture\_url"]}\" alt=\"ipad\">";
        echo "</p>";

        echo $iphone["name"];
        echo "<br>";
        echo 'Price :'. $iphone["price"];
        echo "<br>";
        echo 'weight :'. $iphone["weight"];
        echo 'discount :'. $iphone["discount"];
        echo "<img src=\"${iphone["picture\_url"]}\" alt=\"iphone\">";
        echo "<p></p>";

        echo $imac["name"];
        echo "<br>";
        echo 'Price :'. $imac["price"];
        echo "<br>";
        echo 'weight :'. $imac["weight"];
        echo 'discount :'. $imac["discount"];
        echo "<img src=\"${imac["picture\_url"]}\" alt=\"imac\">";

    ?>
</body>
   </html>