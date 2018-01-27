<?php
try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo ' ROCK N ROLL ! <br />';
	echo ' (you re inside the MATRIX) <br />';
}
catch(Exception $e)
{	
	die('Ereur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM jeux_video');

echo 'JEU avec id :' . $reponse['id']; 

while ( $donnees = $reponse->fetch() == true )
{
	
	echo 'JEU avec id :' . $donnees['ID']; 
	

}

$reponse->closeCursor();

?>
