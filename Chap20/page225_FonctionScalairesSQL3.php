<?php

try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo '<br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}


$reponse=$bdd->query('SELECT ROUND(prix,2) AS prix_arrondi FROM jeux_video');

while($donnees=$reponse->fetch())
{
	echo $donnees['prix_arrondi'] . '<br />';
}

$reponse->closeCursor();

?>
