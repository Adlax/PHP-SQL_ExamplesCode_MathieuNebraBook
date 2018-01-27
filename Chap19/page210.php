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

$bdd->exec('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES (\'Battlefield 1942\',\'Patrick\',\'PC\',\'45\',\'50\', \'seconde guerre mondiale\')') or die(print_r($bdd->errorInfo()));


echo 'Le jeu a bien été inséré';


?>
