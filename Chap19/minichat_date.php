<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<title> Mini-Chat </title>
	<meta http-equiv="Content type" content="text/html; charset=iso-8859-1" />
</head>

<style type="text/css">
form {text-align:center}
</style>

<body>
<form action="minichat_post_date.php" method="post">
	<p>
	<label for="pseudo" > Votre Pseudo ? </label> : <input type="text" name="pseudo" /> <br />
	<label for="message" > Votre message ? </label> : <input type="text" name="message" /> <br />
	<input type="submit" name="envoyer" /> <br />
	</p>
</form>

<?php
try
{	
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo '<br />';
}
catch(Exception $e)
{	
	die('Erreur : ' . $e->getMessage());
}

$reponse=$bdd->query('SELECT pseudo,message,date FROM minichat ORDER BY date DESC LIMIT 0,10');

while($donnees=$reponse->fetch())
{	
	echo strip_tags($donnees['pseudo']).'    '.strip_tags($donnees['message']).'    '.DATE_FORMAT($donnees['date'], '%d %m %Y %Hh%imin%ss ').strip_tags($donnees['date']).'<br />';
}

$reponse->closeCursor();
?>

</body>

</html>


