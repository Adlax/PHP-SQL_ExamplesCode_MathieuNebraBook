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


$reponse=$bdd->query('SELECT LENGTH(nom) AS long_nom FROM jeux_video');

while($donnees=$reponse->fetch())
{
	echo $donnees['long_nom'] . '<br />';
}

$reponse->closeCursor();

?>
