<?php

try
{	
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','');
	echo 'Lets rock ! <br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video WHERE possesseur=\'Patrick\'');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'] . '<br />';


$reponse->closeCursor();

?>
