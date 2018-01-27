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

$req = $bdd->prepare('SELECT nom,prix FROM jeux_video WHERE possesseur = ? AND prix<= ? ORDER BY prix');
$req -> execute(array($_GET['possesseur'],$_GET['prixmax']));

echo '<ul>';

while ( $donnees = $req->fetch()  )
{
	
	echo '<li> JEU avec nom :' . $donnees['nom'] .' a :' . $donnees['prix'] . 'euros <br /> </li>'; 
	

}

echo '</ul>';

$req->closeCursor();

?>
