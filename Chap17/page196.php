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

$reponse = $bdd->query('SELECT nom,possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');


while ( $donnees = $reponse->fetch()  )
{
	
	echo 'JEU avec nom :' . $donnees['nom'] . 'appartient a : '. $donnees['possesseur'].'<br />'; 
	

}

$reponse->closeCursor();

?>
