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

$reponse = $bdd->query('SELECT nom,possesseur,console,prix FROM jeux_video WHERE console=\'Xbox\' OR console=\'PS2\' ORDER BY prix DESC LIMIT 0,10');

echo 'Voici les champs nom,possesseurs,console,prix de la table Jeux Video avec uniquement les jeux sur xbox ou PS2 et avec les prix triés par prix descendants. (on ne prend que les 10 jeux les plus chers)';

while ( $donnees = $reponse->fetch()  )
{
	
	echo 'JEU avec nom :' . $donnees['nom'] . ', appartient a : '. $donnees['possesseur']. 'sur console : '. $donnees['console'] .', et coute : ' .$donnees['prix'] . 'euros <br />'; 
	

}

$reponse->closeCursor();

?>
