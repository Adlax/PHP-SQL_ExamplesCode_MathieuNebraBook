<?php

try
{	
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','');
	echo '<br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

$donnees = $reponse->fetch();
echo 'Prix moyen :'.$donnees['prix_moyen'] . '<br />';


$reponse->closeCursor();

?>
