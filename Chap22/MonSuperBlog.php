<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title> MON SUPER BLOG </title>
	<meta http-equiv="Content type" content="text/html; charset=iso-8859-1" />
</head>

<style type="text/css">
form {text-align:center}
</style>

<body>
<form action="MonSuperBlog_Post.php" method="post">
	<p>
	<label for="titre"> Votre titre ? </label> : <input type="text" name="titre" /> <br />
	<label for="message"> Votre message ? </label> : <input type="text" name="message" /> <br />
	<input type="submit" name="Envoi" /> <br />
	</p>
</form>

<?php
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo 'Lets rock !'.'<br />';
}
catch(Exception $e)
{	
	die('Erreur : '.$e->getMessage());
}

$reponse=$bdd->query('SELECT titre,contenu,date_creation FROM Billets ORDER BY date_creation DESC LIMIT 0,5');

while($donnees=$reponse->fetch())
{
	echo $donnees['titre'].$donnees['contenu'].$donnees['date_creation'].'<br />';
}

$reponse->closeCursor();
?>

</body>
</html>


