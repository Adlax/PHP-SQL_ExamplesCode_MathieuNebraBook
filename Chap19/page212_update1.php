<?php
try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo ' ROCK N ROLL ! <br />';
	echo ' (you re inside the MATRIX) <br />';
	echo '  <br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$bdd->exec('UPDATE jeux_video SET prix=10, nbre_joueurs_max=32 WHERE ID=54') or die(print_r($bdd->errorInfo()));


echo 'Le jeu a bien été updaté';

$bdd->closeCursor();

?>
