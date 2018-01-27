<?php
if (isset($_GET['nom']) AND isset($_GET['prenom'])AND isset($_GET['repetitions']))
{
	for($i=0;$i<=$_GET['repetitions'];$i++)
	{
	echo 'Salut '.$_GET['nom'].' '.$_GET['prenom'].'<br \>';
	}
}
else
{
	echo 'Vous n avez pas renseigne tous les parametres dans l url';
}
?>