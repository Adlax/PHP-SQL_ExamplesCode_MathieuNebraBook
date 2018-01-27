<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title> MON SUPER BLOG </title>
		<meta http-equiv="Content type" content="text/html; charset=iso-8859-1" />
		<link href="style.css" rel="stylesheet" type="tect/css" />
	</head>

	<body>
	<h1>Mon super Blog!</h1>
	<p> <a href="Blog_index.php">Retour a la liste des billets</a> </p>
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

		$req=$bdd->prepare('SELECT id,titre,contenu,DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\')AS date_creation_fr FROM Billets 			WHERE id= ?');
		$req->execute(array($_GET['ref_billet']));
		$donnees=$req->fetch();
	?>	

		<div class="news">
		<h3>
			<?php echo strip_tags($donnees['titre']).'<br />'; ?>
			<em> le <?php echo $donnees['date_creation_fr']; ?> </em>
		</h3>
		<p>
			<?php echo nl2br(strip_tags($donnees['contenu'])); ?> <br />
		</p>
	</div>


	<h2> Commentaires associés </h2>
	<?php
		$req->closeCursor();
	

		$req=$bdd->prepare('SELECT auteur,contenu,DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\')AS date_commentaire_fr FROM 			Commentaires WHERE ref_billet=? ORDER BY date_creation DESC');
		$req->execute(array($_GET['ref_billet']));

		while($donnees=$req->fetch())
		{
		?>
		
		<p><strong><?php echo strip_tags($donnees['auteur']); ?></strong> a écrit a la date : <?php echo $donnees['date_commentaire_fr'];?> 			ceci:</p>
   		<p><?php echo nl2br(strip_tags($donnees['contenu'])); ?> </p>
		<?php
		}
		$req->closeCursor();
	?>
	</body>
</html>

 
