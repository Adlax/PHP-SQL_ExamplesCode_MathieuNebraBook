<?php

try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo ' LETS ROCK ! <br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$reponse=$bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while($donnees=$reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?>

