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


$nb_modifs=$bdd->exec('UPDATE jeux_video SET possesseur=\'Florient\' WHERE possesseur=\'Michel\'') or die(print_r($bdd->errorInfo()));


echo 'il y a eu ' . $nb_modifs . ' modifications dans la table';


$bdd->closeCursor();

?>
