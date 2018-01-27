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

$reponse = $bdd->query('SELECT nom,possesseur,prix FROM jeux_video ORDER BY prix');


while ( $donnees = $reponse->fetch()  )
{
	
	echo 'JEU avec nom :' . $donnees['nom'] . ', appartient a : '. $donnees['possesseur']. ', et coute : '.$donnees['prix'].'euros <br />'; 
	

}

$reponse->closeCursor();

?>
