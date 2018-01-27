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

$reponse = $bdd->query('SELECT nom,possesseur,prix FROM jeux_video ORDER BY prix DESC LIMIT 0,10');

echo 'Voici les champs nom,possesseurs,prix de la table Jeux Video avec les prix triés par prix descendants. (on ne prend que les 10 jeux les plus chers)';

while ( $donnees = $reponse->fetch()  )
{
	
	echo 'JEU avec nom :' . $donnees['nom'] . ', appartient a : '. $donnees['possesseur']. ', et coute : '.$donnees['prix'].'euros <br />'; 
	

}

$reponse->closeCursor();

?>
