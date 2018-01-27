<?php

try
{	
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','');
	echo 'Lets rock ! <br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT SUM(prix) AS prix_tot FROM jeux_video WHERE possesseur=\'Patrick\'');
$donnees = $reponse -> fetch();
echo $donnees['prix_tot'] . '<br />';
$reponse->closeCursor();


$reponse = $bdd->query('SELECT MAX(prix) AS prix_max FROM jeux_video WHERE possesseur=\'Patrick\'');
$donnees = $reponse->fetch();
echo $donnees['prix_max'] . '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT MIN(prix) AS prix_min FROM jeux_video WHERE possesseur=\'Patrick\'');
$donnees = $reponse->fetch();
echo $donnees['prix_min'] . '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT COUNT(*) AS nb_jeux FROM jeux_video WHERE possesseur=\'Patrick\'');
$donnees = $reponse->fetch();
echo $donnees['nb_jeux'] . '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT COUNT(nbre_joueurs_max) AS nb_jeux FROM jeux_video');
$donnees = $reponse->fetch();
echo $donnees['nb_jeux'] . '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT COUNT(DISTINCT possesseur) AS nb_possesseurs FROM jeux_video');
$donnees = $reponse->fetch();
echo $donnees['nb_possesseurs'] . '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen,console FROM jeux_video GROUP BY console');
while( $donnees = $reponse->fetch() )
{echo $donnees['prix_moyen'] . $donnees['console'].'<br />';}
echo '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen,console FROM jeux_video GROUP BY console HAVING prix_moyen<=10');
while($donnees = $reponse->fetch())
{echo $donnees['prix_moyen'] . $donnees['console'].'<br />';}
echo '<br />';
$reponse->closeCursor();

$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen,console FROM jeux_video WHERE possesseur=\'Patrick\' GROUP BY console HAVING prix_moyen<=10');
while($donnees = $reponse->fetch())
{echo $donnees['prix_moyen'] . $donnees['console'].'<br />';}
echo '<br />';
$reponse->closeCursor();

?>
