<?php
	try
	{
		$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
		
	}
	catch(Exception $e)
	{	
		die('Erreur : '.$e->getMessage());
	}

	$fill=$bdd->prepare('INSERT INTO Commentaires (ref_billet,auteur,contenu,date_creation) VALUES (:ref_billet,:auteur,:contenu,NOW())');
	$fill->execute(array(
				'auteur'=>$_POST['pseudo'],
				'contenu'=>$_POST['commentaire']));

	header('Location : Blog_commentaires2.php');

?>

