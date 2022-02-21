<?php
try
{

$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=exo_dump_formateur;charset=utf8','root','root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

include 'my_requests.php'

?>
