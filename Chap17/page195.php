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
	die('Ereur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video');


while ( $donnees = $reponse->fetch() )
{
	
	echo 'JEU avec nom :' . $donnees['nom'] . '<br />'; 
	

}

$reponse->closeCursor();

?>
