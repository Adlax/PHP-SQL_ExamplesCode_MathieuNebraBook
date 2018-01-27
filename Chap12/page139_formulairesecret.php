<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<xtml xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang:"fr">

<head>
	<title> 
	Page serveur central
	<meta http-equiv="Content-Type" content="text/html ; charset=iso-8859-1""/>
	</title>
</head>

<body>
<?php
	if (!isset($_POST['passwd']) OR $_POST['passwd']!=="kangourou")
	{
		echo '<p> mot de passe incorrect </p>';
		?>
		<p>
		Veuillez entrer le mot de passe de base pour acceder a la page login serveur central
		</p>
		<form method="post" action="page139_formulairesecret.php">
			<p>
			<input type="password" name="passwd" />
			<input type="submit" value="Valider AUB" />
			</p>
		</form>
		<p>
		<br />
		<?php
	}
	else
	{
		?>
		<h1>Voici le code d acces au central ; <br /> </h1>
		<p><strong> DFGR-DF44-HR45-HJTY </strong></p>
		
		<p> Cete page est reservee aux employes de la boss compagnie </p> <br />
		La compagnie vous danku
		<?php
	}
?>
</body>

</html>