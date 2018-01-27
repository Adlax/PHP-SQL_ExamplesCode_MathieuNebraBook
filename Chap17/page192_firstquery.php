<?php
try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo ' ROCK N ROLL !';
}
catch(Exception $e)
{	
	die('Ereur : ' . $e->getMessage());
}

$reponse=$bdd->query('SELECT * FROM jeux_video');

?>
