<?php
try
{
$mybdd = new PDO('mysql:host=localhost;dbname=data_boutique;charset=utf8','margot','2323');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());


}

function affichageBd ($mybdd){
    $products = $mybdd->query ("SELECT * FROM products");
    $toto = $products->fetchAll(PDO::FETCH_ASSOC);
    return $toto;

    // $productsStatement = $mysqlClient->prepare($sqlQuery);
    // $productsStatement->execute();
    // $products = $productsStatement->fetchAll();
     
}
    
 
    

