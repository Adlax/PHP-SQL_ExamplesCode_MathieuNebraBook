<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title> MON SUPER BLOG </title>
		<meta http-equiv="Content type" content="text/html; charset=iso-8859-1" />
		<link href="style.css" rel="stylesheet" type="tect/css" />
	</head>

	<body>

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

		$req=$bdd->query('SELECT id,titre,contenu,DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\')AS date_creation_fr FROM Billets 			ORDER BY date_creation DESC LIMIT 0,5');

		while($donnees=$req->fetch())
		{
		?>
			<div class="news">
				<h3>
				    <?php echo strip_tags($donnees['titre']).'<br />'; ?>
				    <em> le <?php echo $donnees['date_creation_fr']; ?> </em>
				</h3>
				<p>
				    <?php echo nl2br(strip_tags($donnees['contenu'])); ?> <br />
				    <em><a href="Blog_commentaires2.php?ref_billet=<?php echo $donnees['id'];?>">Voir les Commentaires du billet</a></em>
				</p>
			</div>
		<?php
		}

		$req->closeCursor();
		?>

	</body>
</html>


