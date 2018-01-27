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

$req = $bdd->prepare('INSERT INTO jeux_video(possesseur,prix) VALUES (:possesseur, :prix)');
$req -> execute(array('possesseur' => $possesseur,'prix' => $prix)) or die(print_r($req->errorInfo()));


echo 'Le jeu a bien été inséré';


?>
