<?php
if (isset($_GET['nom']) AND isset($_GET['prenom']))
{
	echo 'Salut '.$_GET['nom'].' '.$_GET['prenom'];
}
else
{
	echo 'Vous n avez pas renseigne tous les para;etres dans l url';
}
?>
