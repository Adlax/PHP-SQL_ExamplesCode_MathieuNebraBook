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

$req = $bdd->prepare('SELECT nom,prix FROM jeux_video WHERE possesseur = :possesseur AND prix<= :prixmax ');
$req -> execute(array('possesseur' => $_GET['possesseur'],'prixmax' => $_GET['prixmax']));

echo '<ul>';

while ( $donnees = $req->fetch()  )
{
	
	echo '<li> JEU avec nom :' . $donnees['nom'] .' a :' . $donnees['prix'] . 'euros <br /> </li>'; 
	

}

echo '</ul>';

$req->closeCursor();

?>
