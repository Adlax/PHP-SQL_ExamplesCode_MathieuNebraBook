<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<xtml xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang:"fr">

<head>
	<title> Page 1 </title>
	<meta http-equiv="Content-Type" content="text/html ; charset=iso-8859-1""/>
</head>

<body>
	<p>
	<?php echo 'Bonjour'.$_SESSION['prenom'].''.$_SESSION['nom'] ?> <br />
	Te voila a la page 1.
	</p>
	
</body>

</html>