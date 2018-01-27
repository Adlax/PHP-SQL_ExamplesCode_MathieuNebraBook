<?php
$age=8;
if ($age<=12)
{	
	echo "salut gamin!" ;
	?>	
	<br />
	<?php
	?>	
	<br />
	END
	<?php

}
?>


<?php
$age=8;
if ($age<=12)
{
	echo "salut gamin! Bienevenue sur mon site! <br />" ;
	$autorisation_entrer="oui" ;
}
else
{
	echo "Ceci est un site pour gamins. Adios. <br />" ;
	$autorisation_entrer="non" ;
}
?>	
<br />
<?php
echo 'avez vous l\'autorisation d\'entrer :'.$autorisation_entrer.'...zou!' ;
	?>	
	<br />
	END
	<?php
?>


<?php
if ($autorisation_entrer =="oui")
{
	//instrus avec autorisation
	echo "tu as le droit d\'entrer sur le site" ;
}
elseif ($autorisation_entrer =="non")
{
	//instru quand pass interdit
	echo "tu n\'as le droit d\'entrer sur le site" ;
}
else
{
	echo "tu peux resaisir ton age stp " ;
}
	?>	
	<br />
	END
	<?php
?>



//<?php
//if ($autorisation_entrer == true)
//{
//	echo "bienvenue sur le site" ;
//}
//elseif
//{
//	echo "tu ne peux pas entrer" ;
//}
?>



<?php
if ($autorisation_entrer)
{
	echo "bienvenue" ;
}
else
{
	echo "t'as pas le droit d\'entrer" ;
}
	?>	
	<br />
	END
	<?php
?>


<?php
if (!$autorisation_entrer)
{
	echo "pas autorisé!" ;
}
	?>	
	<br />
	END
	<?php
?>


<?php
$sexe="garcon";
if ($autorisation_entrer AND $sexe=="garcon")
{
	echo "bienvenu gamin sur le site de goldobite";
}
else if($autorisation_entrer AND $sexe=="fille")
{
	echo "retourne jouer a barbi!";
}
	?>	
	<br />
	END
	<?php
?>

<?php
$sexe="alien";
if ($sexe =="fille" OR $sexe=="garcon")
{
	echo "salut terrien!" ;
}	
else
{
	echo "salut hermaphrodite";
}
	?>	
	<br />
	END
	<?php
?>


<?php
$variable=23;
if ($variable ==23)
{
	echo "<strong>bravo</strong>vous avez trouvé le nombre mystere";
}
	?>	
	<br />
	END
	<?php
?>


<?php
{
	?>
	<stong>Bravo</strong> vous avez trouvé le nombre mystere !
	<?php
}
?>;
