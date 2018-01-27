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


//$reponse = $bdd->query('SELECT nom,possesseur,console,prix FROM jeux_videos');
//while($donnees = $reponse->fetch())

$reponse=$bdd->query('SELECT * FROM jeux_video');
while ( $donnees=$reponse->fetch() )

{
	echo $donnees['nom'] . $donnees['possesseur'].$donnees['console'].$donnees['prix'].'<br />';
}

$reponse->closeCursor();

?>
