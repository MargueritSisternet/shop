<?php

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM products';
$productsStatement = $mysqlClient->prepare($sqlQuery);
$productsStatement->execute();
$products = $productsStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($products as $product) {
?>
    <p><?php echo $product['author']; ?></p>

<?php
    // query-6.sql : 
Liste de toutes les commandes (Numéro + Prix total de la commande, calculé sur la base des prix des articles et des quantités de la commande) // 

SELECT orders.number, SUM(order_product.quantity*products.price)AS total
FROM order_product
INNER JOIN orders ON order_product.order_id = orders.id
INNER JOIN products ON order_product.product_id = products.id
GROUP BY orders.number;

?>