<?php
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
}
catch(Exception $e)
{	
	die('Erreur : '.$e->getMessage());
}

$fill=$bdd->prepare('INSERT INTO Billets (titre,contenu,date_creation) VALUES (:titre,:contenu,NOW())');
$fill->execute(array(
		     'titre'=>$_POST['titre'],
		     'contenu'=>$_POST['message']));
header('Location: MonSuperBlog.php');
?>



