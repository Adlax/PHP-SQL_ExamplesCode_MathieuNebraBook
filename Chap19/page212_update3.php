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


$req=$bdd->prepare('UPDATE jeux_video SET prix= :nv_prix , nbre_joueurs_max= :nv_nbre_joueurs_max WHERE nom= :nom_jeu'); 
$req->execute(array(
		'nv_prix'=>$prix,
		'nv_nbre_joueurs_max'=>$joueursmax,
		'nom_jeu'=>$nomjeu)) or die(print_r($bdd->errorInfo()));



$req->closeCursor();

?>
