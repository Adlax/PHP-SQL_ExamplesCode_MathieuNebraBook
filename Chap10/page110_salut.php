<?php
if (isset($_GET['nom']) AND isset($_GET['prenom'])AND isset($_GET['repetitions']))
{
	$_GET['repetitions']=(int) $_GET['repetitions'];
	
	if($_GET['repetitions']>=1 AND $_GET['repetitions']<=100)
	{
		for($i=0;$i<=$_GET['repetitions'];$i++)
		{
		echo 'Salut '.$_GET['nom'].' '.$_GET['prenom'].'<br \>';
		}
	}
	
}
else
{
	echo 'Vous n avez pas renseigne tous les parametres dans l url';
}
?>