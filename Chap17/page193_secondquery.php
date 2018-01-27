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

$reponse=$bdd->query('SELECT * FROM jeux_video');

while ( $donnees=$reponse->fetch() )
{
	?>
	<p> <strong> JEU avec id : <?php echo $donnees['ID']; ?> </strong> : <?php echo $donnees['nom']; ?> sur console <?php echo $donnees['console']; ?> et dont le possesseur est : <?php echo $donnees['possesseur']; ?> est vendu au prix de : <?php echo $donnees['prix']. ' euros'; ?> et on peut y jouer max a <?php echo $donnees['nbre_joueurs_max'].'personnes'; ?> et qui a pour commentaire du vendeur : <em><?php echo $donnees['commentaires']; ?> </em> </p>
	<?php

}

$reponse->closeCursor();

?>
