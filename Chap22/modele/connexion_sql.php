<?php
global $bdd;
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=test','root','');
	echo 'CONNEXION FAITE !';
}
catch(Exception $e)
{
	die('Erreurs: '.$e->getMessage());
}

?>

