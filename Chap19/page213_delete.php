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

$req = $bdd->prepare('DELETE FROM jeux_video WHERE ID= :id');
$req -> execute(array('id' => $_GET['id'])) or die(print_r($req->errorInfo()));


echo 'Le jeu a bien été supprimé';


?>
