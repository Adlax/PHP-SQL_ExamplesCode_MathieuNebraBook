<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<title> MiniChat </title>
	<meta http-equiv="Content type" content="text/html; charset=iso-8859-1" />
</head>

<style type="text/css">
form {text-align:center}
</style>

<body>
<form action="minichat_post.php" method="post">
	<p>
	<input type="text" name="pseudo" /> <br />
	<input type="text" name="message" /> <br />
	<input type="submit" name="envoyer" /> <br />
	</p>
</form>

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

$reponse=$bdd=>query('SELECT pseudo,message FROM minichat ORDER BY ID DESC LIMIT 0,10');

while($donnees=$reponse=>fetch())
{	
	echo strip_tags($donnees['pseudo']).strip_tags($donnees['message']);
}

$reponse->closeCursor();
?>

</body>

</html>





