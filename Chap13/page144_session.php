<?php
session_start();
$_SESSION['prenom']='Jean';
$_SESSION['nom']='Dupont';
$_SESSION['age']=24;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<xtml xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang:"fr">

<head>
	<title> Titre de ma page </title>
	<meta http-equiv="Content-Type" content="text/html ; charset=iso-8859-1""/>
</head>

<body>
	<p>
	<?php echo 'Bonjour'.$_SESSION['prenom'].''.$_SESSION['nom'] ?> <br />
	Te voila a la page d accueil du site. Tu veux aller sur une autre page ?
	</p>
	
	<p>
	<a href="page144_page1.php"> page 1 </a> <br />
	<a href="page144_page2.php"> page 2 </a> <br />
	</p>
</body>

</html>