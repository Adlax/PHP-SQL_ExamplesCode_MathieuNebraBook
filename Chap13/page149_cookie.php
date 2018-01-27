<?php
setcookie('pseudo','bob',time()+1*24*3600,null,null,false,true);
setcookie('pays','fronce',time()+1*24*3600,null,null,false,true);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<xtml xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang:"fr">

<head>
	<title> Page test cookies </title>
	<meta http-equiv="Content-Type" content="text/html ; charset=iso-8859-1""/>
</head>

<body>
	<p>
	<?php echo 'Bonjour '.$_COOKIE['pseudo'].' tu viens de ce pays ; '.$_COOKIE['pays']; ?> <br />
	</p>
	
</body>

</html>